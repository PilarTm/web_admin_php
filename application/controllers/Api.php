<?php
defined('BASEPATH') OR exit('No direct script access allowed');

interface interface_to_api{
  public function row_to_object($row);
}


class Api extends CI_Controller {


  function __construct(){
    parent::__construct();
    header('Content-Type: application/json');

    if( !$this->user_model->myuser()->api_key ){
      if( !$this->session->userdata('api_key') ){
        echo json_encode(array(
          'error' => "not auth api key",
          "data" => array()
        ));die();
      }
    }

    $this->lang->load('main', $this->user_model->myuser()->language);

    $this->load->model('converter_model');
    $this->load->model('ecounters_model');
    $this->load->model('markconverters_model');
    $this->load->model('modelconverters_model');
    $this->load->model('markecounters_model');
    $this->load->model('modelecounters_model');
    $this->load->model('place_model');
    $this->load->model('concentrator_model');
    $this->load->model('markconcentrator_model');
    $this->load->model('modelconcentrator_model');
  }


  function _append_child_menu( $out = array() , $iPlace ){
    $out[] = array(
      "id" => "place_" . $iPlace->id . "_users", 
      "parent" => "place_" . $iPlace->id, 
      "icon" => "glyphicon glyphicon-user",
      "children" => true,
      "text" => "Пользователи" 
    );
    $out[] = array(
      "id" => "place_" . $iPlace->id . "_admins", 
      "parent" => "place_" . $iPlace->id, 
      "icon" => "glyphicon glyphicon-star",
      "children" => true,
      "text" => "Администраторы" 
    );
    $out[] = array(
      "id" => "place_" . $iPlace->id . "_devices", 
      "parent" => "place_" . $iPlace->id, 
      "icon" => "glyphicon glyphicon-hdd",
      "text" => "Устройства" 
    );
    $out[] = array(
      "id" => "place_" . $iPlace->id . "_reports", 
      "parent" => "place_" . $iPlace->id, 
      "icon" => "glyphicon glyphicon-floppy-save",
      "children" => true,
      "text" => "Отчеты" 
    );
    $out[] = array(
      "id" => "place_" . $iPlace->id . "_converters", 
      "parent" => "place_" . $iPlace->id . "_devices", 
      "icon" => "glyphicon glyphicon-transfer",
      "text" => $this->lang->line("converters.title")
    );
    $out[] = array(
      "id" => "place_" . $iPlace->id . "_e_counters", 
      "parent" => "place_" . $iPlace->id . "_devices", 
      "children" => true,
      "icon" => "glyphicon glyphicon-flash",
      "text" => "Электросчетчики" 
    );
    $out[] = array(
      "id" => "place_" . $iPlace->id. "_places", 
      "parent" => "place_" . $iPlace->id, 
      "text" => "Дочерние элементы",
      "children" => true
    );
    return $out;
  }


  function place_jstree_empty($moved_id = NULL ,$id = null){
    $this->load->model("place_model");

    $out = array();

    if( !is_null( $id ) ){
      $parent = "place_". ((int) $id) . "_append";
    }else{
      $parent = "#";
    }

    foreach( $this->place_model->get_children( (int) $id ) as $iPlace ){
      if( $moved_id == $iPlace->id ){
        continue; 
      }
      $out[] = array(
        "id" => "place_" . $iPlace->id ."_append", 
        "parent" => $parent,
        "children" => $iPlace->count_child() > 0,
        "text" => $iPlace->title 
      );

    }
    echo json_encode($out);
  }


  function place_jstree($id = null , $sub = NULL){
    $this->load->model("place_model");

    $out = array();

    if( !is_null( $sub ) ){

      if( $sub == "children_place" ){
        foreach( $this->place_model->get_children( (int) $id ) as $i_place){
          $out[] = array(
            "id" => "place_" . $i_place->id, 
            "parent" => "place_" . $i_place->place_id . "_places", 
            "a_attr" => array(
              "class" => "text-warning"
            ),
            "children" => true,
            "text" => $i_place->title
          );
        }
        $out[] = array(
          "id" => "place_" . $id . "_places_add", 
          "parent" => "place_" . $id. "_places", 
          "icon" => "glyphicon glyphicon-plus-sign",
          "text" => "Добавить" 
        );
      }elseif( $sub == "users" ){
        foreach( $this->place_model->get_users_by_id( (int) $id ) as $user ){
          $out[] = array(
            "id" => "place_" . $user->id . "_user", 
            "parent" => "place_" . $id . "_users", 
            "icon" => "glyphicon glyphicon-user",
            "text" => $user->email
          );
        }
        $out[] = array(
          "id" => "place_" . $id . "_users_add", 
          "parent" => "place_" . $id . "_users", 
          "icon" => "glyphicon glyphicon-plus-sign",
          "text" => "Привязать" 
        );
        $out[] = array(
          "id" => "place_" . $id . "_users_register", 
          "parent" => "place_" . $id . "_users", 
          "icon" => "glyphicon glyphicon-plus-sign",
          "text" => "Зарегестрировать и привзать" 
        );
      }elseif( $sub == "admins" ){
        foreach( $this->place_model->get_admins_by_id( (int) $id ) as $user ){
          $out[] = array(
            "id" => "place_" . $user->id . "_admin", 
            "parent" => "place_" . $id . "_admins", 
            "icon" => "glyphicon glyphicon-user",
            "text" => $user->email
          );
        }
        $out[] = array(
          "id" => "place_" . $id . "_admins_add", 
          "parent" => "place_" . $id . "_admins", 
          "icon" => "glyphicon glyphicon-plus-sign",
          "text" => "Привязать" 
        );
        $out[] = array(
          "id" => "place_" . $id . "_admins_register", 
          "parent" => "place_" . $id . "_admins", 
          "icon" => "glyphicon glyphicon-plus-sign",
          "text" => "Зарегестрировать и привзать" 
        );
      }elseif( $sub == "converters" ){
        foreach( $this->converter_model->get_by_place_id( $id ) as $iConverter ){
          $out[] = array(
            "id" => "converter_" . $iConverter->id, 
            "parent" => "place_" . $id . "_converters", 
            "icon" => "glyphicon glyphicon-transfer",
            "text" => $iConverter->get_title() ,
            "a_attr" => array(
              "href"   => "/admin/converters/" . $iConverter->id
            )
          );
        }
        $out[] = array(
          "id" => "place_" . $id . "_converters_add", 
          "parent" => "place_" . $id . "_converters", 
          "icon" => "glyphicon glyphicon-plus-sign",
          "text" => "Добавить" 
        );
      }elseif( $sub == "e_counters" ){
        foreach( $this->ecounters_model->get_by_place_id( $id ) as $iConverter ){
          $out[] = array(
            "id" => "ecounters_" . $iConverter->id, 
            "parent" => "place_" . $id . "_e_counters", 
            "icon" => "glyphicon glyphicon-flash",
            "text" => $iConverter->get_title() 
          );
        }
        if( !$this->user_model->myuser()->IsFullLicences() ){
          $out[] = array(
            "id" => "place_" . $id . "_e_counters_add", 
            "parent" => "place_" . $id . "_e_counters", 
            "icon" => "glyphicon glyphicon-plus-sign",
            "text" => "Добавить" 
          );
        }
      }elseif( $sub == "reports" ){
        if( !$this->user_model->myuser()->IsFullLicences() ){
          $out[] = array(
            "id" => "place_" . $id . "_reports_example", 
            "parent" => "place_" . $id . "_reports", 
            "icon" => "glyphicon glyphicon-floppy-save",
            "text" => "Простой XLS отчет" 
          );
        }
      }

    }elseif( !is_null( $id ) ){

      $out = $this->_append_child_menu( $out, $this->place_model->get_by_id( (int) $id ) );


    }else{

      foreach( $this->place_model->get_children( (int) $id ) as $iPlace ){
        $out[] = array(
          "id" => "place_" . $iPlace->id, 
          "parent" => "#", 
          "state" => array(
            "opened" => true
          ),
          "a_attr" => array(
              "class" => "text-warning"
            ),
          "text" => $iPlace->title 
        );
        
        $out = $this->_append_child_menu( $out, $iPlace );


      }

    }

    echo json_encode($out);

  }


  private function ar_to_json( $el = array() , $model = null ){
    if( !$model instanceof CI_Model ){
      return array(
        'error' => "not found exemplar object",
        "data" => array()
      );
    }


    foreach ($el as $i => $iEl) {
      $el[$i] = new $model((array) $iEl);
    }

    return array(
      'error' => "",
      "data" => $el
    );
  }


  function converters($id = NULL){
    if( is_null($id) ){
      echo json_encode($this->ar_to_json( $this->converter_model->get_all() , new Converter_model ));
    }else{
      $converter = new Converter_model();
      $res = (array) json_decode($this->input->post('model'));
      $converter = new Converter_model($res);
      switch( $this->input->post('_method') ){
        case "PUT" :
        if( $converter->id ){
          $converter = $converter->update();
        }else{
          $converter = $converter->insert();
        }
        break;
        case "DELETE" :
        $converter = (new Converter_model(array('id'=>$id)))->remove();
        break; 
        default:
        $converter = $this->converter_model->get_id( $id );
        break;        
      }
      echo json_encode($converter);
    }
  }

  function e_counters_by_concentrator( $concentrator_id = null ){
    if( !is_null($concentrator_id) ){
      echo json_encode($this->ar_to_json( $this->ecounters_model->get_by_concentrator($concentrator_id) , new Ecounters_model ));
    }
  }

  function e_counters($id = NULL){
    if( is_null($id) ){
      if( $this->input->get('converter') ){
        echo json_encode($this->ar_to_json( $this->ecounters_model->get_by_converter($this->input->get('converter')) , new Ecounters_model ));
        die();
      }
      echo json_encode($this->ar_to_json( $this->ecounters_model->get_all() , new Ecounters_model ));
    }else{
      $e_counter = new Ecounters_model();
      $res = (array) json_decode($this->input->post('model'));
      $e_counter = new Ecounters_model($res);
      switch( $this->input->post('_method') ){
        case "PUT" :
        if( $e_counter->id ){
          $e_counter = $e_counter->update();
        }else{
          if( !$this->user_model->myuser()->IsFullLicences() ){
            $e_counter = $e_counter->insert();
          }
        }
        break;
        case "DELETE" :
        $e_counter = (new Ecounters_model(array('id'=>$id)))->remove();
        break;    
        default:
        $e_counter = $this->ecounters_model->get_id( $id );
        break;      
      }
      echo json_encode($e_counter);
    }
  }


  function concentrator($id = NULL){
    if( is_null($id) ){
      if( $this->input->get('concentrator') ){
        echo json_encode(
          $this->ar_to_json( 
            $this->concentrator_model->get_by_concentrator(
              $this->input->get('concentrator')
            ) , 
            new Concentrator_model 
          )
        );
        die();
      }
      echo json_encode($this->ar_to_json( $this->concentrator_model->get_all() , new Concentrator_model ));
    }else{
      $e_counter = new Concentrator_model();
      $res = (array) json_decode($this->input->post('model'));
      $e_counter = new Concentrator_model($res);
      switch( $this->input->post('_method') ){
        case "PUT" :
        if( $e_counter->id ){
          $e_counter = $e_counter->update();
        }else{
            $e_counter = $e_counter->insert();
        }
        break;
        case "DELETE" :
        $e_counter = (new Concentrator_model(array('id'=>$id)))->remove();
        break;    
        default:
        $e_counter = $this->concentrator_model->get_by_id( $id );
        break;      
      }
      echo json_encode($e_counter);
    }
  }



  function mark_converters(){
    echo json_encode($this->ar_to_json( $this->markconverters_model->get_all() , new Markconverters_model ));
  }

  function model_converters(){
    echo json_encode($this->ar_to_json( $this->modelconverters_model->get_all() , new Modelconverters_model ));
  }

  function mark_e_counters(){
    echo json_encode($this->ar_to_json( $this->markecounters_model->get_all() , new Markecounters_model ));
  }

  function model_e_counters( $id = NULL ){

    $e_counter_model = new Modelecounters_model();

    if( is_null($id) ){
      echo json_encode($this->ar_to_json( $this->modelecounters_model->get_all() , new Modelecounters_model ));
      die();
    }else{
      $e_counter_model = $this->modelecounters_model->get_id( $id );
    }

    echo json_encode($e_counter_model);
  }


  function place( $id = NULL ){
    if( is_null( $id ) ){

    }else{
      $res = (array) json_decode($this->input->post('model'));
      $place = new Place_model($res);

      $old_place = $this->place_model->get_by_id( $id );

      switch( $this->input->post('_method') ){
        case "PUT" :
        if( $place->id ){
          if( $old_place->place_id && $old_place->place_id != $place->id ){
            $old_place->remove();
            $place = $place->insert();
          }else{
            $place = $place->update();
          }
        }else{
          $place = $place->insert();
        }
        break;
        case "DELETE" :
        $place = (new Place_model(array('id'=>$id)))->remove();
        break;
        default:
        $place = $this->place_model->get_by_id( $id );
        break;      
      }
      echo json_encode($place);
    }
  }

  function user( $id = NULL ){
    if( is_null( $id ) ){

    }else{
      $res = (array) json_decode($this->input->post('model'));
      $place = new User_model($res);
      switch( $this->input->post('_method') ){
        case "PUT" :
        if( $place->id ){
          $place = $place->update();
        }else{
          $place = $place->insert();
        }
        break;
        case "DELETE" :
        $place = (new User_model(array('id'=>$id)))->remove();
        break;
        default:
        $place = $this->place_model->get_by_id( $id );
        break;      
      }
      echo json_encode($place);
    }
  }


  function model_concentrator($id = null){

    $model_concentrator = new Modelconcentrator_model();

    if( is_null($id) ){
      echo json_encode($this->ar_to_json( $this->modelconcentrator_model->get_all() , new Modelconcentrator_model ));
      die();
    }else{
      $model_concentrator = $this->modelconcentrator_model->get_id( $id );
    }

    echo json_encode($model_concentrator);
  }


  function mark_concentrator($id = null){

    $mark_concentrator = new Markconcentrator_model();

    if( is_null($id) ){
      echo json_encode($this->ar_to_json( $this->markconcentrator_model->get_all() , new Markconcentrator_model ));
      die();
    }else{
      $mark_concentrator = $this->markconcentrator_model->get_id( $id );
    }

    echo json_encode($mark_concentrator);
  }




}
