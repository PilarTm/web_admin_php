<?php

class Api_test extends  CI_Unit_test{
  
    function index(){

      $test = 1 + 1;

      $expected_result = 2;

      $test_name = 'Adds one plus one';

      $this->unit->run($test, $expected_result, $test_name);

      echo 1;
      
    }


}