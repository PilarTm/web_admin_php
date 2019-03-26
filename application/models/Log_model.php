<?php

class Log_model extends CI_Model {

  public $id = 0;
  public $new_data = "";
  public $action = "";
  public $table = "";
  public $id_table = 0;
  public $user_id = 0;
  public $time = "";
  public $ip = "";

  function insert(){
    $this->time = null;
    $this->db->insert('log' , (array) $this); 
  }

  function get_last( $limit = 10 ){
    $this->db->select("log.*");
    $this->db->from("place");
    $this->db->join('place p', 'p.lft >= place.lft and p.rgt <= place.rgt', 'left');
    $this->db->join('user' , "user.place_id = p.id" , "left");
    $this->db->join("log" , "log.user_id = user.id" , "left");
    $this->db->where("place.id" , $this->user_model->myuser()->place_id);
    $this->db->order_by("id" , "DESC");
    $this->db->limit($limit);
    $res = $this->db->get();
    $res_out = array();
    foreach( $res->result() as $iLog ){
      $res_out[] = new Log_model( (array) $iLog );
    }
    return $res_out;
  }


  function last_log_by( $table = "" , $id_table = 0 , $limit = 0 ){
    $this->db->select("log.*");
    $this->db->from("place");
    $this->db->join('place p', 'p.lft >= place.lft and p.rgt <= place.rgt', 'left');
    $this->db->join('user' , "user.place_id = place.id" , "left");
    $this->db->join("log" , "log.user_id = user.id" , "left");
    $this->db->where("user.api_key" , $this->session->userdata('api_key'));
    $this->db->where("log.table" , $table);
    $this->db->where("log.id_table" , $id_table);
    $this->db->order_by("id" , "DESC");
    $this->db->group_by(array("log.id"));
    $this->db->limit($limit);
    $res = $this->db->get();
    $res_out = array();
    foreach( $res->result() as $iLog ){
      $res_out[] = new Log_model( (array) $iLog );
    }
    return $res_out;
  }


  function last_log_by_initiator( $who = 0 , $limit = 0 ){
    $this->db->select("log.*");
    $this->db->from("place");
    $this->db->join('place p', 'p.lft >= place.lft and p.rgt <= place.rgt', 'left');
    $this->db->join('user' , "user.place_id = p.id" , "left");
    $this->db->join("log" , "log.user_id = user.id" , "left");
    $this->db->where("log.user_id" , $who);
    $this->db->order_by("id" , "DESC");
    $this->db->group_by(array("log.id"));
    $this->db->limit($limit);
    $res = $this->db->get();
    $res_out = array();
    foreach( $res->result() as $iLog ){
      $res_out[] = new Log_model( (array) $iLog );
    }
    return $res_out;
  }


  function get_user(){
    $this->db->where("id" , $this->user_id);
    $res = $this->db->get('user');
    return new User_model( (array) $res->row() );
  }

  function get_object(){

    if( $this->action == "delete" ){
      $obj = (array) json_decode($this->new_data);
      if( $this->table == "converters" ){
        return new Converter_model($obj);
      }elseif( $this->table == "place" ){
        return new Place_model($obj);
      }elseif( $this->table == "e_counters" ){
        return new Ecounters_model($obj);
      }elseif( $this->table == "concentrator" ){
        return new Concentrator_model($obj);
      }
    }

    if( $this->table == "converters" ){
      return $this->converter_model->get_id( $this->id_table );
    }elseif( $this->table == "place" ){
      return $this->place_model->get_by_id( $this->id_table );
    }elseif( $this->table == "e_counters" ){
      return $this->ecounters_model->get_id( $this->id_table );
    }elseif( $this->table == "concentrator" ){
      return $this->concentrator_model->get_by_id( $this->id_table );
    }
  }

}