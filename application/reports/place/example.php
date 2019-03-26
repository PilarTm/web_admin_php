<?php
defined('BASEPATH') OR exit('No direct script access allowed');


/*

  Местоположение / серийный номер / показания / дата

*/


$place = $this->place_model->get_by_id( $id );

$this->load->library('excel');

$this->excel->setActiveSheetIndex(0);
$this->excel->getActiveSheet()->setTitle('Отчет');

$dataArray = array();

$head = array("Местоположение" , "Серийный номер");

foreach ($place->get_all_parameters() as $parameter) {
  $head[] = $parameter->title;
}

$head[] = "Дата";

$dataArray[] = $head;


foreach( $place->get_all_ecounters() as $ecounter ){
  $row_counter = array();

  $row_counter[] = implode(" / ",$ecounter->pluck_place_parents_title() );
  $row_counter[] = $ecounter->serial;

  foreach ($place->get_all_parameters() as $parameter) {
    $data = $ecounter->last_value_by_parameter( $parameter->id );
    $row_counter[] = $data->id ? $data->value : "";
  }

  $dataArray[] = $row_counter;
}


$styleArray = array(
    'font'  => array(
        'size'  => 10,
    ));
$this->excel->getDefaultStyle()
    ->applyFromArray($styleArray);





$this->excel->getActiveSheet()->fromArray($dataArray);


$this->excel->getActiveSheet()->calculateColumnWidths();
PHPExcel_Shared_Font::setAutoSizeMethod(PHPExcel_Shared_Font::AUTOSIZE_METHOD_EXACT);
foreach($this->excel->getActiveSheet()->getColumnDimension() as $col) {
    $col->setAutoSize(true);
}

$filename='example_'.$place->title."_".(new DateTime)->format("Y-m-d_H").'.xls';

header('Content-Type: application/vnd.ms-excel');
header('Content-Disposition: attachment;filename="'.$filename.'"');
header('Cache-Control: max-age=0');

$objWriter = PHPExcel_IOFactory::createWriter($this->excel, 'Excel5');  
$objWriter->save('php://output');