<?php

class Usertmp_model extends CI_Model {

  public $id = 0;
  public $email = "";
  public $password = "";
  public $hash = "";
  public $is_trial = 0;

  function __construct($p = array()){
    parent::__construct($p);

    $this->load->model('user_model');
    $this->load->model('place_model');
  }


  function insert(){

    $this->password = $this->user_model->gen_pass($this->password);
    $this->hash = $this->user_model->gen_pass(time() . $this->password);

    $res = $this->db->insert('usertmp' , (array) $this);
    if( $res ){
      $this->db->where('id' , $this->db->insert_id());
      $res = $this->db->get('usertmp');
      return new Usertmp_model((array)$res->row()); 
    }
    return new Usertmp_model(); 
  }

  function move(){
    $this->db->where('id' , $this->id);
    $res = $this->db->get('usertmp');

    if( !$res->num_rows() ){
      return new User_model();
    }

    $row = (array) $res->row();
    $row['pass'] = $row['password'];
    $row['api_key'] = md5("di" . md5($row['pass']) . md5("dox"). md5(time()));

    $del_id = $row['id'];
    unset($row['password']);
    unset($row['id']);
    unset($row['hash']);

    $row['type'] = 1;

    $place = new Place_model(array(
      'title' => $row['email'],
      'place_id' => 0
    ));
    if( $row['is_trial'] ){
      $place->licences = 10;
    }
    $place = $place->insert();

    $row['place_id'] = $place->id;
    $user = new User_model( $row );

    $this->db->where('id' , $del_id);
    $this->db->delete('usertmp');

    if( $row['is_trial'] ){
      $d = new DateTime();
      $d->modify('+1 day');
      $user->droped_at = $d->format("Y-m-d H:i:s");
    }


    return $user->insert();
  }


}