<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

  function __construct(){
    parent::__construct();

    $this->load->model('converter_model');
    $this->load->model('place_model');
    $this->load->model('ecounters_model');
    $this->load->model('data_model');
    $this->load->model('parameter_model');
    $this->load->model('modelparameter_model');
    $this->load->model('concentrator_model');




    if( !$this->user_model->myuser()->api_key ){
      redirect("/auth" , "refresh" , 200);
    }
    $this->smarty->assign('Self' , $this->user_model->myuser());
    $this->smarty->assign('version' , get_version());
    $this->smarty->assign('brand' , get_brand());
    $this->smarty->assign('base_url' , base_url());

    if( $this->user_model->myuser()->droped_at ){
      $d = new DateTime($this->user_model->myuser()->droped_at);

      $diff = $d->diff( new DateTime() );
      if( !$diff->invert ){
        $this->user_model->myuser()->clear_all();
        redirect("/trial?end_time" , "redirect" , 200);
      }
    }

    $this->lang->load('main', $this->user_model->myuser()->language);
    $this->smarty->assign('lang' , $this->lang);
  }


  function help( $sub = NULL ){
    if( $sub == "start_work" ){
      $this->smarty->view("admin/help/{$sub}.html");
    }

  }


  public function index(){
    $this->smarty->assign('active_tab' , "main");


    $place = $this->place_model->get_by_id( $this->user_model->myuser()->place_id );
    $this->smarty->assign('ecounters_count_success' , $this->ecounters_model->count_success());
    $this->smarty->assign('ecounters_count_warning' , $this->ecounters_model->count_warning());
    $this->smarty->assign('ecounters_count_error' , $this->ecounters_model->count_error());
    $this->smarty->assign('log' , $this->log_model->get_last(10));
    $this->smarty->view('admin/index.html');
  }

  public function places($id = null , $sub = NULL , $sub2 = NULL){

    if( !is_null($sub) ){
      if( $sub == "reports" ){
        $report_path = APPPATH. "reports/place/" .$sub2 . ".php";
        if( file_exists($report_path) ){
          include $report_path;
          exit();
        }
      }
    }

    $this->smarty->assign('coverters' , $this->converter_model->get_all_objects());
    $this->smarty->assign('concentrators' , $this->concentrator_model->get_all_objects());
    $this->smarty->assign('active_tab' , "places");
    $this->smarty->assign('place' , $this->place_model->get_by_id( $this->user_model->myuser()->place_id ));
    $this->smarty->view('admin/place/index.html');
  }

  public function converters(){
    $this->smarty->assign('active_tab' , "devices");
    $this->smarty->assign('active_nav' , "converters");
    $this->smarty->view('admin/converters/index.html');
  }

  public function concentrator($id = null){
    $this->smarty->assign('coverters' , $this->converter_model->get_all_objects());
    if( is_null($id) ){
      $this->smarty->assign('active_tab' , "devices");
      $this->smarty->assign('active_nav' , "concentrator");
      $this->smarty->view('admin/concentrator/index.html');
    }else{
      $this->smarty->assign('active_tab' , "devices");
      $this->smarty->assign('active_nav' , "concentrator");
      $this->smarty->assign('concentrator' , $this->concentrator_model->get_by_id( $id ));
      $this->smarty->assign('coverters' , $this->converter_model->get_all_objects());
      $this->smarty->view('admin/concentrator/concentrator.html');
    }
  }


  public function logout(){
    $this->session->sess_destroy();
    redirect("/auth" , "refresh" , 200);
  }


  public function e_counter(){
    $this->smarty->assign('active_tab' , "devices");
    $this->smarty->assign('active_nav' , "e_counters");
    $this->smarty->assign('coverters' , $this->converter_model->get_all_objects());
    $this->smarty->assign('concentrators' , $this->concentrator_model->get_all_objects( ));
    $this->smarty->view('admin/e_counters/index.html');
  }


  function log( $object = NULL , $id = NULL ){
    if( !is_null($object) && !is_null($id) ){
      if( $object == "user" ){
        $this->smarty->assign('log' , $this->log_model->last_log_by_initiator((int)$id , 20));
      }
      $this->smarty->view('admin/log/by_object.html');
    }
  }


  function report($object = NULL , $id = NULL){

    $this->load->library('excel');

    $filename='just_some_random_name.xls';

    $dataArray = array();

    $styleArray = array(
      'font'  => array(
        'size'  => 8
      ));

    $this->excel->getDefaultStyle()
    ->applyFromArray($styleArray);


    ################################

    if( $object == "converter" ){

      $converter = $this->converter_model->get_id($id);

      $d = new DateTime();
      $filename = "report_{$converter->get_title()}_{$d->format('Y-m-d-H-i-s')}.xls";

      $parameters = $converter->get_parameters();

      # Head
      $row = array("");
      foreach ($parameters as $parameter) {
        $row[] = $parameter->title;
      }
      $dataArray[] = $row;

      foreach ($this->ecounters_model->get_by_converter($converter->id) as $ecounter) {
        $row = array($ecounter->serial);

        foreach ($parameters as $parameter) {
          $Data = (new Ecounters_model((array)$ecounter))->last_value_by_parameter($parameter->id);
          $row[] = $Data->id ? $Data->value : "--";
        }

        $dataArray[] = $row;
      }
    }




    ################################
    $this->excel->getActiveSheet()->fromArray($dataArray);


    foreach(range('A','Z') as $columnID) {
      $this->excel->getActiveSheet()->getColumnDimension($columnID)->setAutoSize(true);
    }

    header('Content-Type: application/vnd.ms-excel');
    header('Content-Disposition: attachment;filename="'.$filename.'"');
    header('Cache-Control: max-age=0');

    $objWriter = PHPExcel_IOFactory::createWriter($this->excel, 'Excel5');  
    $objWriter->save('php://output');

  }

}
