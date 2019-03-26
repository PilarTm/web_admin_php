<?php

class Sprint_model extends CI_Model {

  public $id = 0;
  public $is_active = 0;
  public $is_archive = 0;
  public $date_start = "";
  public $name = "";


  function get_all(){
    $this->db->where('is_archive' , 0);
    $query = $this->db->get('sprint');
    $output = array();
    foreach( $query->result() as $row ){
      $output[] = $this->row_to_object($row);
    }
    return $output;
  }

  function std_up( $post_str = NULL ){
    $std = json_decode($post_str);
    if( !$post_str ){
      return $this->get_empty();
    }

    $model = $this->row_to_object($std);

    list($month,$day,$year) = sscanf($model->date_start, "%d/%d/%d");
    $d = new DateTime("{$year}-{$month}-{$day} 00:00:00");
    $model->date_start = $d->format("Y-m-d 00:00:00");

    // Update
    if( $model->id ){
      $this->db->replace('sprint' , (array) $model);
    }else{
      $this->db->insert('sprint' , (array) $model);
      $model->id = $this->db->insert_id();
    }

    // 3.В списке Спринтов появляется новый спринт с названием по правилу ГГ-Н, где ГГ - две цифры года, Н - номер 
    $model->name = sprintf("%2d-%d" , $d->format("y") , $model->id);

    $this->db->replace('sprint' , $model);

    return $model;

  }


  function get_active(){
    $this->db->where('is_active' , 1);
    $this->db->limit(1);
    $res = $this->db->get('sprint');
    if( !$res->num_rows() ){
      return $this->get_empty();
    }
    return $this->row_to_object( $res->row() );
  }

  function get_empty(){
    return clone($this);
  }

  public function row_to_object( $row = array() ){
    $sprint = $this->get_empty();
    foreach( $row as $k => $v ){
      $sprint->$k = $v;
    }
    return $sprint;
  }

}