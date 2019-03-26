<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Report extends CI_Controller {

  function __construct(){
    parent::__construct();  
    $this->load->library('excel');
  }


  /*
  
    Шаблон по умолчанию
    Строка с расположением | серийник | показания 
  
  */
  function place_default( $id_object = NULL ){

    $this->excel->setActiveSheetIndex(0);
    $this->excel->getActiveSheet()->setTitle('test worksheet');
    $this->excel->getActiveSheet()->setCellValue('A1', 'This is just some text value');
    $this->excel->getActiveSheet()->getStyle('A1')->getFont()->setSize(20);
    $this->excel->getActiveSheet()->getStyle('A1')->getFont()->setBold(true);
    $this->excel->getActiveSheet()->mergeCells('A1:D1');
    $this->excel->getActiveSheet()->getStyle('A1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);

    $filename='just_some_random_name.xls';
    header('Content-Type: application/vnd.ms-excel');
    header('Content-Disposition: attachment;filename="'.$filename.'"');
    header('Cache-Control: max-age=0');

    $objWriter = PHPExcel_IOFactory::createWriter($this->excel, 'Excel5');  
    $objWriter->save('php://output');
  }


  /*
    
    Шаблон по умолчанию для конвертера

    Серийник | показания 

  */
  function converter_default( $id ){
    // $this->excel->setActiveSheetIndex(0);
    // $this->excel->getActiveSheet()->setTitle('test worksheet');

    foreach ($this->converter_model->get_by_id($id)->get_parameters as $parameters) {
      var_dump($parameters);
    }


    // $this->excel->getActiveSheet()->setCellValue('A1', 'This is just some text value');

    // $filename="conveter_{$id}_d_.xls";
    // header('Content-Type: application/vnd.ms-excel');
    // header('Content-Disposition: attachment;filename="'.$filename.'"');
    // header('Cache-Control: max-age=0');

    // $objWriter = PHPExcel_IOFactory::createWriter($this->excel, 'Excel5');  
    // $objWriter->save('php://output');
  }

}