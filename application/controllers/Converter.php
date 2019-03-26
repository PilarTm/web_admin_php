<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Converter extends CI_Controller {

  function __construct(){
    parent::__construct();

    $this->load->model('converter_model');
    $this->load->model('ecounters_model');

    if( !$this->user_model->myuser()->api_key ){
      redirect("/auth" , "refresh" , 200);
    }
    $this->smarty->assign('Self' , $this->user_model->myuser());
    $this->smarty->assign('version' , get_version());
    $this->smarty->assign('brand' , get_brand());
    $this->smarty->assign('base_url' , base_url());

    $this->lang->load('main', $this->user_model->myuser()->language);
    $this->smarty->assign('lang' , $this->lang);
  }

  function get_id( $id = 0 ){
    $this->smarty->assign('id' , $id);
    $this->smarty->assign('active_tab' , "devices");
    $this->smarty->assign('active_nav' , "converters");
    $this->smarty->assign('converter' , $this->converter_model->get_id( $id ));
    $this->smarty->view("admin/converters/converter.html");

  }


}