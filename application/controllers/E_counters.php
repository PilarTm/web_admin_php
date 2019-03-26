<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class E_counters extends CI_Controller {

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

  function get_id( $id = 0 , $now = null ){


    $now = is_null( $now ) ? new DateTime() : $now ;
    $this->smarty->assign('now' , $now );

    $prev = (clone($now));
    $prev = $prev->sub(new DateInterval('P1D'));
    $this->smarty->assign('prev' , $prev );

    $next = (clone($now));
    $next = $next->add(new DateInterval('P1D'));
    $this->smarty->assign('next' , $next );

    $this->smarty->assign('id' , $id);
    $this->smarty->assign('active_tab' , "devices");
    $this->smarty->assign('active_nav' , "e_counters");
    $this->smarty->assign('meter' , $this->ecounters_model->get_id( $id ));
    
    $this->smarty->view("admin/e_counters/e_counter.html");

  }

  function get_id_archive( $id = 0 , $y = 0 ,$m = 0 ,$d = 0 ){
    return $this->get_id( $id , new DateTime( "{$y}-{$m}-{$d} 00:00:00" ) );
  }


}