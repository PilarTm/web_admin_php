<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends CI_Controller {


  public function index(){
    $this->session->session_destroy();
    redirect("/auth" , "refresh" , 200);
  }

}
