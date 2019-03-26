<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tests extends CI_Controller {

  function __construct(){

    parent::__construct();
    $this->load->library('unit_test');
    $this->load->dbforge();
    $this->load->database('tests', TRUE);
  }

  function run( $name = "" ){
    include("tests/__empty.php");
    $this->$name();
  }

  function index(){

    $this->run("test_1");
    $this->run("test_2");

  }


  function test_1(){
    echo $this->unit->run('Foo', 'Foo');
  }

  function test_2(){
    echo $this->unit->run('F22oo', 'Foo');
  }




}