<?php

class Ecounters_model extends CI_Model {

  public $id = 0;
  public $title = "";
  public $num_485 = 0;
  public $serial = "";
  public $converter_id = 0;
  public $concentrator_id = 0;
  public $model_id = 0;
  public $status = 1;
  public $place_id = 0;


  function get_by_place_id( $id = null ){
    $this->db->where("place_id" , $id);
    $res = $this->db->get("e_counters");
    $out = array();
    foreach( $res->result() as $r ){
      $out[] = new Converter_model( (array) $r );
    }
    return $out;
  }


  function get_title(){
    if( !$this->title ){
      if( $this->serial ){
        return $this->serial;
      }
      return $this->num_485;
    } 
    return $this->title;
  }


  function get_id( $id = 0 ){
    $this->db->select('e_counters.*');
    $this->db->from('e_counters');
    $this->db->join('user', 'user.place_id = e_counters.place_id', 'left');
    $this->db->join('places', 'places.id = e_counters.place_id', 'left');
    $this->db->join('places p', 'places.lft > p.lft and places.rgt < p.rgt', 'left');
    $this->db->where('user.api_key', $this->session->userdata('api_key'));
    $this->db->where('e_counters.id', (int) $id);
    $query = $this->db->get();
    return new Ecounters_model( (array) $query->row() );
  }


  function get_by_status($status = 0){
    $this->db->select('e_counters.*');
    $this->db->from('e_counters');
    $this->db->join('user', 'user.place_id = e_counters.place_id', 'left');
    $this->db->join('places', 'places.id = e_counters.place_id', 'left');
    $this->db->join('places p', 'places.lft > p.lft and places.rgt < p.rgt', 'left');
    $this->db->where('user.api_key', $this->session->userdata('api_key'));
    $this->db->where('e_counters.status', $status);
    $res =  $this->db->get();
    return $res->num_rows();
  }


  function count_error(){
    return $this->get_by_status(0);
  }

  function count_success(){
    return $this->get_by_status(1);
  }

  function count_warning(){
    return $this->get_by_status(2);
  }


  function last_log( $limit = 0 ){
    $this->load->model('log_model');
    return $this->log_model->last_log_by("e_counters" , $this->id , $limit);
  }


  function get_all_resource(){
    $this->db->select('e_counters.*');
    $this->db->from("place");
    $this->db->join('place p', 'place.lft >= p.lft and place.rgt <= p.rgt', 'left');
    $this->db->join('user' , "user.place_id = place.id" , "left");
    $this->db->join('e_counters' , "e_counters.place_id = p.id" , "left");
    $this->db->where('user.api_key', $this->session->userdata('api_key'));
    $this->db->where('e_counters.id is not null', NULL, FALSE);
    return $this->db->get();
  }

  function get_by_converter( $id = 0 ){
    $this->db->select('e_counters.*');
    $this->db->from('e_counters');
    $this->db->join('converters', 'converters.id = e_counters.converter_id', 'left');
    $this->db->join('user', 'user.place_id = converters.place_id', 'left');
    $this->db->join('places', 'places.id = converters.place_id', 'left');
    $this->db->join('places p', 'places.lft >= p.lft and places.rgt <= p.rgt', 'left');
    $this->db->where('user.api_key', $this->session->userdata('api_key'));
    $this->db->where('converters.id', (int) $id );
    $query = $this->db->get();
    return $query->result();
  }


  function get_by_concentrator( $id = 0 ){
    $this->db->select('e_counters.*');
    $this->db->from('e_counters');
    $this->db->join('concentrator', 'concentrator.id = e_counters.concentrator_id', 'left');
    $this->db->join('user', 'user.place_id = concentrator.place_id', 'left');
    $this->db->join('places', 'places.id = concentrator.place_id', 'left');
    $this->db->join('places p', 'places.lft >= p.lft and places.rgt <= p.rgt', 'left');
    $this->db->where('user.api_key', $this->session->userdata('api_key'));
    $this->db->where('concentrator.id', (int) $id );
    $query = $this->db->get();
    return $query->result(); 
  }

  function get_all(){
    return $this->get_all_resource()->result();
  }


  function count_all(){
    return $this->get_all_resource()->num_rows();
  }

  function update(){
    $this->db->replace('e_counters', (array) $this);
    $this->db->where('id' , $this->id);
    $res = $this->db->get('e_counters');
    return new Ecounters_model((array)$res->row()); 
  }

  function remove(){

    $this->db->where('id' , $this->id);
    $res = $this->db->get("e_counters");

    $after = (array) $res->row();
    $log = new Log_model(array(
      'new_data' => json_encode((array)$res->row()),
      'action' => 'delete',
      'table' => 'e_counters',
      'id_table' => $this->id,
      'user_id' => $this->user_model->myuser()->id
    ));
    $log->insert();


    $this->db->where('id' , $this->id);
    $this->db->delete('e_counters');
    $this->db->where('id' , $this->id);
    $res = $this->db->get('e_counters');
    return new Ecounters_model((array)$res->row()); 
  }

  function insert(){
    if( !$this->place_id ){
      $this->place_id = $this->user_model->myuser()->place_id;
    }
    $res = $this->db->insert('e_counters' , (array) $this);
    if( $res ){
      $this->db->where('id' , $this->db->insert_id());
      $res = $this->db->get('e_counters');

      $meter = new Ecounters_model((array)$res->row()); 
      $log = new Log_model(array(
        'new_data' => json_encode((array) $meter),
        'action' => 'insert',
        'table' => 'e_counters',
        'id_table' => $meter->id,
        'user_id' => $this->user_model->myuser()->id
      ));
      $log->insert();

      return $meter; 
    }
    return new Ecounters_model(); 
  }

  function parameters(){
    $this->load->model('modelparameter_model');
    return $this->modelparameter_model->parameters_by_model_id( $this->model_id );
  }

  function last_value_by_parameter( $id_parameter = 0 ){
    $this->load->model("data_model");

    $d = new DateTime();
    $this->db->where('time >=' , $d->format("Y-m-d 00:00:00"));
    $this->db->where('meter_id' , $this->id);
    $this->db->where('parameter_id' , (int) $id_parameter);
    $this->db->order_by('time' , "DESC");
    $this->db->limit(1);
    $res = $this->db->get("data");
    return new Data_model( (array) $res->row() );
  }


  function pluck_value_by_parameter_now( $id_parameter = 0 ){
    $this->load->model("data_model");

    $d = new DateTime();
    $this->db->where('time >=' , $d->format("Y-m-d 00:00:00"));
    $this->db->where('meter_id' , $this->id);
    $this->db->where('parameter_id' , (int) $id_parameter);
    $res = $this->db->get("data");
    $res_out = array();
    foreach( $res->result() as $value ){
      $d = new DateTime($value->time);
      $d->setTime($d->format("H"),0);
      $res_out[$d->format("Y-m-d H:00:00")] = $value->value;
    }
    $start_time = new DateTime("now");
    $start_time->setTime(0,0);
    for ($i=0; $i < 24; $i++) { 
      if( !isset( $res_out[$start_time->format("Y-m-d H:00:00")] ) ){
        $res_out[$start_time->format("Y-m-d H:00:00")] = "null";
      }
      $start_time->add(new DateInterval('PT1H'));
    }
    ksort($res_out);
    $arr = array_values($res_out);
    
    return implode(",", $arr);
  }


  function count_pluck_value_by_parameter_by_date($id_parameter = 0 ,$d = null){
    $this->load->model("data_model");

    $l_data = (clone($d));
    $l_data = $l_data->add(new DateInterval('P1D'));

    $this->db->where('time >=' , $d->format("Y-m-d 00:00:00"));
    $this->db->where('time <' , $l_data->format("Y-m-d 00:00:00"));
    $this->db->where('meter_id' , $this->id);
    $this->db->where('parameter_id' , (int) $id_parameter);
    $res = $this->db->get("data");
    return $res->num_rows();
  }

  function pluck_value_by_parameter_by_date($id_parameter = 0 ,$d = null){
    $this->load->model("data_model");

    $l_data = (clone($d));
    $l_data = $l_data->add(new DateInterval('P1D'));

    $this->db->where('time >=' , $d->format("Y-m-d 00:00:00"));
    $this->db->where('time <' , $l_data->format("Y-m-d 00:00:00"));
    $this->db->where('meter_id' , $this->id);
    $this->db->where('parameter_id' , (int) $id_parameter);
    $res = $this->db->get("data");
    $res_out = array();
    foreach( $res->result() as $value ){
      $date = new DateTime($value->time);
      $date->setTime($date->format("H"),0);
      $res_out[$date->format("Y-m-d H:00:00")] = $value->value;
    }
    $start_time = clone($d);
    $start_time->setTime(0,0);
    for ($i=0; $i < 24; $i++) { 
      if( !isset( $res_out[$start_time->format("Y-m-d H:00:00")] ) ){
        $res_out[$start_time->format("Y-m-d H:00:00")] = "null";
      }
      $start_time->add(new DateInterval('PT1H'));
    }
    ksort($res_out);
    $arr = array_values($res_out);
    
    return implode(",", $arr);
  }


  function get_data_by_param_by_hour( $parameter = "" , $now = null ){
    $this->load->model("data_model");

    $d = is_null( $now ) ? new DateTime() : $now;

    $l_data = (clone($d));
    $l_data->modify("+1 hour");

    $this->db->where("ident" , $parameter);
    $res = $this->db->get("parameter");
    if( !$res->num_rows() ){
      return new Data_model();
    }


    $this->db->where('time >=' , $d->format("Y-m-d H:00:00"));
    $this->db->where('time <' , $l_data->format("Y-m-d H:00:00"));
    $this->db->where('meter_id' , $this->id);
    $this->db->where('parameter_id' , (int) $res->row()->id);
    $res = $this->db->get("data");

    if( !$res->num_rows()){
      return new Data_model();
    }
    return new Data_model((array) $res->row());
  }


  function _get_parameters_by_hour_by_ar_params($now = null , $params = array()){
    $res = array();

    $now = is_null($now) ? new DateTime() : $now;

    for ($i=0; $i <= 24 ; $i++) { 
      $row = array();
      $rew = clone($now);
      $rew = $rew->setTime($i , 1 , 1);
      $row["time"] = sprintf("%02d:00-%02d:00" , $i , $i+1 );
      foreach( $params as $ident_param ){
        $row[$ident_param] = $this->get_data_by_param_by_hour($ident_param , $rew);
      }
      $res[] = $row;
    }

    return $res;
  }


  /*
    Получение всех значений по активной энергии
    за ТЕКУЩИЙ ДЕНЬ
  */
    function get_active_energy($now = null){
      return $this->_get_parameters_by_hour_by_ar_params( $now , array(
        'ENERGY_ACTIVE_TARIF_1',
        'ENERGY_ACTIVE_TARIF_2',
        'ENERGY_ACTIVE_TARIF_SUM'
      ));
    }

    function get_reactive_energy($now = null){
      return $this->_get_parameters_by_hour_by_ar_params( $now , array(
        'ENERGY_REACTIVE_TARIF_1',
        'ENERGY_REACTIVE_TARIF_2',
        'ENERGY_REACTIVE_TARIF_SUM'
      ));
    }

    function get_full_energy($now = null){
      return $this->_get_parameters_by_hour_by_ar_params( $now , array(
        'ENERGY_FULL_TARIF_1',
        'ENERGY_FULL_TARIF_2',
        'ENERGY_FULL_TARIF_SUM'
      ));
    }

    function get_voltage($now = null){
      return $this->_get_parameters_by_hour_by_ar_params( $now , array(
        'PHASE_VOLTAGE_1',
        'PHASE_VOLTAGE_2',
        'PHASE_VOLTAGE_3'
      ));
    }

    function get_current($now = null){
      return $this->_get_parameters_by_hour_by_ar_params( $now , array(
        'PHASE_CURRENT_1',
        'PHASE_CURRENT_2',
        'PHASE_CURRENT_3'
      ));
    }

    function get_power($now = null){
      return $this->_get_parameters_by_hour_by_ar_params( $now , array(
        'PHASE_POWER_1',
        'PHASE_POWER_2',
        'PHASE_POWER_3'
      ));
    }



    function isset_parameter_like($line = "ABCDEFABCDEF"){

      $this->db->join("e_counters" ,"model_parameter.model_id = e_counters.model_id" , "left");
      $this->db->join("parameter" ,"parameter.id = model_parameter.parameter_id" , "left");
      $this->db->where("e_counters.model_id" , $this->model_id);
      $this->db->like("parameter.ident" , $line);
      $res = $this->db->get("model_parameter");
      return $res->num_rows();
    }

    /*
      Получение всех нащзваний мест
    */
    function pluck_place_parents_title(){
      $this->load->model("place_model");
      $place = $this->place_model->get_by_id( $this->place_id );
      $this->db->where("lft <=" , $place->lft);
      $this->db->where("rgt >=" , $place->rgt);
      $this->db->order_by("lft" , "DESC");
      $res = array();
      $query = $this->db->get("place");
      foreach ($query->result() as $key => $value) {
        $res[] = $value->title;
      }
      $res = array_reverse($res);
      return $res;
    }


  }