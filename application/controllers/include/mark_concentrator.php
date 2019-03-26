<?php

$attributes = array("ENGINE" => 'InnoDB');
$this->dbforge->add_field('id');
$this->dbforge->create_table('mark_concentrator', TRUE, $attributes);

AddColumn($this, 'mark_concentrator' ,'title', 'varchar(255)');

$data = array(
        'id' => 1,
        'title' => 'Меркурий 225',
);
$this->db->replace('mark_concentrator', $data);
