<?php


  $attributes = array("ENGINE" => 'InnoDB');
  $this->dbforge->add_field('id');
  $this->dbforge->create_table('model_concentrator', TRUE, $attributes);
  AddColumn($this, 'model_concentrator' ,'title', 'varchar(255)');
  AddColumn($this, 'model_concentrator' ,'library', 'varchar(255)');
  AddColumn($this, 'model_concentrator' ,'mark_id', 'int(255) unsigned');

  $concentrator_model = array(
    array(
      'title' => 'Меркурий 225.11',
      'library' => 'MERKURY_225_11',
      'mark_id' => 1
    ),
    array(
      'title' => 'Меркурий 225.21',
      'library' => 'MERKURY_225_21',
      'mark_id' => 1
    ),
  );



  foreach( $concentrator_model as $key => $value) {
    $value['id'] = $key +1;
    $this->db->replace('model_concentrator', $value);
  }
