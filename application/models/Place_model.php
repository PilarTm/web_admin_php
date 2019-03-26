<?php

class Place_model extends CI_Model {

  public $id = 0;
  public $title = "";
  public $place_id = 0;
  public $lft = 0;
  public $rgt = 0;
  public $licences = 0;
  // public $uuid = ""; // Уникальный идентификатор для привязки ил отвязки от деревьев
  // public $soft_key = ""; // Номер программы которая привязана к этому месту 

  function insert(){

    $parent_id = $this->place_id;
    $this->db->select('rgt');
    $this->db->where('id' , $this->place_id);
    $query = $this->db->get('place');
    $row = $query->row();

    if( !$parent_id ){
      $this->db->select('rgt');
      $this->db->where('place_id' , 0);
      $query = $this->db->get('place');
      $row = $query->row();

      $this->lft = $row->rgt+1;
      $this->rgt = $row->rgt+2;
    }else{
      $this->db->set('rgt', 'rgt+2', FALSE);
      $this->db->where('rgt >=', $row->rgt);
      $this->db->where('lft <', $row->rgt);
      $this->db->update('place');

      $this->db->set('lft', 'lft+2', FALSE);
      $this->db->set('rgt', 'rgt+2', FALSE);
      $this->db->where('lft >', $row->rgt);
      $this->db->update('place');

      $this->lft = $row->rgt;
      $this->rgt = $row->rgt+1;
    }

    if( !$this->place_id ){
      $this->place_id = 1;
    }

    $res = $this->db->insert('place' , (array) $this);
    if( $res ){
      $this->db->where('id' , $this->db->insert_id());
      $res = $this->db->get('place');

      $place = new Place_model((array)$res->row());

      $log = new Log_model(array(
        'new_data' => json_encode((array) $place),
        'action' => 'insert',
        'table' => 'place',
        'id_table' => $place->id,
        'user_id' => $this->user_model->myuser()->id
      ));
      $log->insert();

      return new Place_model((array)$res->row()); 
    }
    return new Place_model(); 
  }



  function update(){

    $this->db->replace('place', (array) $this);
    $this->db->where('id' , $this->id);
    $res = $this->db->get('place');
    $after = (array) $res->row();

    $log = new Log_model(array(
      'new_data' => json_encode((array)$res->row()),
      'action' => 'delete',
      'table' => 'place',
      'id_table' => $this->id,
      'user_id' => $this->user_model->myuser()->id
    ));
    $log->insert();

    return new Place_model((array)$res->row()); 
  }

  function get_by_id( $id = 0 ){
    $this->db->where('id' , $id);
    $res = $this->db->get('place');
    if( !$res->num_rows() ){
      return new Place_model();
    }
    return new Place_model( (array) $res->row() );
  }

  function children(){
    $this->db->where('place_id' , $this->id);
    $res = $this->db->get('place');
    $places = array();
    foreach( $res->result() as $iplace ){
      $places[] = new Place_model( (array) $iplace );
    }
    return $places; 
  }

  function count_child(){
    $this->db->where('place_id' , $this->id);
    $res = $this->db->get('place');
    return $res->num_rows();
  }



  function remove(){

    $this->db->where('id' , $this->id);
    $res = $this->db->get('place');
    $after = (array) $res->row();

    $this->db->select('lft, rgt');
    $this->db->where('id', $this->id);
    $query = $this->db->get('place');
    $res = $query->row();
    $leftKey = $res->lft;
    $rightKey = $res->rgt;
    
    $rangeOfKeys = $rightKey - $leftKey + 1;
    
    $log = new Log_model(array(
      'new_data' => json_encode($after),
      'action' => 'delete',
      'table' => 'place',
      'id_table' => $this->id,
      'user_id' => $this->user_model->myuser()->id
    ));
    $log->insert();

    $this->db->where('id' , $this->id);
    $this->db->delete('place');
    
    //обновление родит.ветки
    $this->db->where('lft <', $leftKey);
    $this->db->where('rgt >', $rightKey);
    $this->db->set('rgt', "rgt-$rangeOfKeys", FALSE);
    $this->db->update('place');
    
    //обновление след. эл-тов
    $this->db->where('lft >', $rightKey);
    $this->db->set('lft', "lft-$rangeOfKeys", FALSE);
    $this->db->set('rgt', "rgt-$rangeOfKeys", FALSE);
    $this->db->update('place');    

    $this->db->where('id' , $this->id);
    $res = $this->db->get('place');
    return new Converter_model((array)$res->row()); 
  }


  function get_children($id = NULL){

    if( !$id ){
      $id = $this->user_model->myuser()->place_id;
      $this->db->where('id' , (int) $id);
    }else{
      $this->db->where('place_id' , (int) $id);
    }
    $this->db->order_by("CHAR_LENGTH(title)" , "ASC");
    $this->db->order_by("title" , "ASC");
    $res = $this->db->get('place');
    $out = array();
    foreach( $res->result() as $ip ){
      $out[] = new Place_model( (array) $ip );
    }
    return $out;
  }


  function get_users_by_id( $id = NULL ){
    $this->db->where("place_id" , $id);
    $this->db->where("type" , 0);
    $res = $this->db->get("user");
    $out = array();
    foreach ($res->result() as $users) {
      $out[] = new User_model((array) $users);
    }
    return $out;
  }

  function get_admins_by_id( $id = NULL ){
    $this->db->where("place_id" , $id);
    $this->db->where("type" , 1);
    $res = $this->db->get("user");
    $out = array();
    foreach ($res->result() as $users) {
      $out[] = new User_model((array) $users);
    }
    return $out;
  }


  function get_all_parameters(){

    $this->load->model("parameter_model");

    $this->db->join("e_counters" , "e_counters.place_id = place.id" , "left");
    $this->db->join("model_parameter" , "model_parameter.model_id = e_counters.model_id" , "left");
    $this->db->join("parameter" , "parameter.id = model_parameter.parameter_id" , "left");
    $this->db->where("place.lft >=" , $this->lft);
    $this->db->where("place.rgt <=" , $this->rgt);
    $this->db->where('e_counters.id is NOT NULL', NULL, FALSE);
    $this->db->group_by("parameter.id");

    $output = array();
    $res = $this->db->get("place");
    foreach( $res->result() as $pl ){
      $output[] = new Parameter_model( (array) $pl );
    }
    return $output;
  }


  function get_all_ecounters(){
    $this->load->model("ecounters_model");
    $this->db->select("e_counters.*");
    $this->db->join("e_counters" , "e_counters.place_id = place.id" , "left");
    $this->db->where("lft >=" , $this->lft);
    $this->db->where("rgt <=" , $this->rgt);
    $this->db->where('e_counters.id is NOT NULL', NULL, FALSE);
    $output = array();
    $res = $this->db->get("place");
    foreach( $res->result() as  $row ){
      $output[] = new Ecounters_model((array) $row);
    }
    return $output;
  }

}