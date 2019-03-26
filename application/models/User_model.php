<?php

class User_model extends CI_Model {

  public $id = 0;
  public $email = "";
  public $pass = "";
  public $active = true;
  public $api_key = "";
  public $place_id = 0;
  public $type = 0;
  public $droped_at = "";


  function gen_pass( $pass = "" ){
    return md5("di" . md5($pass) . md5("dox"));
  }


  protected $Auth_user = null;


  function IsFullLicences(){
    $this->load->model("place_model");
    $place = $this->place_model->get_by_id( $this->myuser()->place_id );
    return $place->licences <= $this->myuser()->get_all_count_devices();
  }


  function get_all_count_devices(){
    $this->db->select('count(*) as count');
    $this->db->from("place");
    $this->db->join('place p', 'place.lft <= p.lft and place.rgt >= p.rgt', 'left');
    $this->db->join('user' , "user.place_id = place.id" , "left");
    $this->db->join('e_counters' , "e_counters.place_id = p.id" , "left");
    $this->db->where('user.api_key', $this->session->userdata('api_key'));
    $this->db->where('e_counters.id is not null', NULL, FALSE);
    $res = $this->db->get();
    return $res->row()->count;
  }


  function myuser(){
    if( !is_null($this->Auth_user) ){
      return $this->Auth_user;
    }
    $this->db->where('api_key' , $this->session->userdata('api_key'));
    $res = $this->db->get('user');
    if( !$res->num_rows() ){
      return new User_model();
    }
    $this->Auth_user = new User_model($res->row());
    $this->Auth_user->language = "russian";
    return $this->Auth_user;
  }


  function remove(){
    $this->db->where('id' , $this->id);
    $this->db->delete('user');
  }


  function clear_all(){
    $this->remove();
  }


  function insert(){

    $row = (array) $this;
    unset($row['*Auth_user']);
    if( !$row['pass'] ){
      $row['pass'] = $this->gen_pass($row['pass']);
      $row['api_key'] = md5("di" . md5($row['pass']) . md5("dox"). md5(time()));
    }
    $res = array();
    foreach ($row as $key => $value) {
      if( !is_null($value) ){
        $res[$key] = $value;
      }
    }


    $res = $this->db->insert('user' , $res);
    if( $res ){
      $this->db->where('id' , $this->db->insert_id());
      $res = $this->db->get('user');
      return new User_model((array)$res->row()); 
    }
    return new User_model(); 
  }

}