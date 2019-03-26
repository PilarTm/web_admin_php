<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {


  public function index(){

    if( $this->user_model->myuser()->id ){
      redirect("/admin" , "refresh" , 200);
    }

    if( $this->input->post('username') && $this->input->post('password') ){
      $this->db->where("email" , $this->input->post('username'));
      $this->db->where("pass" , $this->user_model->gen_pass($this->input->post('password')));
      $res = $this->db->get('user');
      if( $res->num_rows() ){
        $user = $res->row();
        $this->session->set_userdata('api_key' , $user->api_key);
        redirect("admin/" , "refresh" , 200);
      }
    }

    $this->smarty->view("auth/index.html");
  }

  public function c_install(){
    $this->load->dbforge();
    include("install.php");
    redirect("admin/" , "refresh" , 200);
  }
}
