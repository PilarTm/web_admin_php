<?php

class Task_model extends CI_Model {

  public $id = 0;
  
  // Заголовок задачи
  public $title = "";

  // Описание задачи
  public $description = "";

  // Время для выполнения
  public $time_estimate = "";

  // Закрыта или открыта задача
  // 1 - закрыта
  public $is_close = 0;

  public $sprint_id = 0;


  /*
    Получение пустой модели
  */
  function get_empty(){
    return clone($this);
  }


  function get_all(){
    // $this->
  }

  /*
    Обновление или добавление модели из JSON-подобной строки 
    @param string
    @return Task_model
  */
  function std_up( $post_str = NULL ){
    $std = json_decode($post_str);
    if( !$post_str ){
      return $this->get_empty();
    }

    $model = $this->row_to_object($std);

    // Update
    if( $model->id ){
      $this->db->replace('task' , (array) $model);
    }else{
      $this->db->insert('task' , (array) $model);
      $model->id = $this->db->insert_id();
    }
    return $model;
  }


  public function row_to_object( $row = array() ){
    $sprint = $this->get_empty();
    foreach( $row as $k => $v ){
      $sprint->$k = $v;
    }
    return $sprint;
  }


  function get_free(){
    $output = array();
    $this->db->where('sprint_id' , 0);
    $res = $this->db->get('task');
    foreach ($res->result() as $row) {
      $output[] = $this->row_to_object( $row);
    }
    return $output;
  }

  function get_in_sprint(){
    $output = array();
    $this->db->where('sprint_id >' , 0);
    $res = $this->db->get('task');
    foreach ($res->result() as $row) {
      $output[] = $this->row_to_object( $row);
    }
    return $output;
  }

}