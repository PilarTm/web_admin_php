<?php

function AddColumn($self, $table_name = "", $columnName = '', $columnType = '', $null = FALSE) {
  if (!$self->db->field_exists($columnName, $table_name)) {
    $fields = array(
      $columnName => array(
        'type' => $columnType,
        'null' => $null
      )
    );
    $self->dbforge->add_column($table_name, $fields);
  }
}

$this->load->model("user_model");


# USER
$attributes = array("ENGINE" => 'InnoDB');
$this->dbforge->add_field('id');
$this->dbforge->create_table('user', TRUE, $attributes);

AddColumn($this, 'user' ,'email', 'varchar(255)');
AddColumn($this, 'user' ,'pass', 'varchar(255)');
AddColumn($this, 'user' ,'active', 'int(11)');
AddColumn($this, 'user' ,'place_id', 'int(10) unsigned');
AddColumn($this, 'user' ,'api_key', 'varchar(255)');
AddColumn($this, 'user' ,'type', 'int(10) unsigned');
AddColumn($this, 'user' ,'droped_at', 'varchar(255)');


$res  = $this->db->get('user');
if( !$res->num_rows() ){
    $data = array(
            'id' => 1,
            'email' => 'admin',
            'pass'  => $this->user_model->gen_pass("admin"),
            'active'  => 1,
            'api_key'  => "ssss",
            'place_id'  => 1
    );
}



# Converters
$attributes = array("ENGINE" => 'InnoDB');
$this->dbforge->add_field('id');
$this->dbforge->create_table('converters', TRUE, $attributes);

AddColumn($this, 'converters' ,'ip', 'varchar(255)');
AddColumn($this, 'converters' ,'port', 'int(255) unsigned default 0');
AddColumn($this, 'converters' ,'login', 'varchar(255)');
AddColumn($this, 'converters' ,'password', 'varchar(255)');
AddColumn($this, 'converters' ,'model_id', 'int(10) unsigned');
AddColumn($this, 'converters' ,'is_ecxluded', 'int(10) unsigned');
AddColumn($this, 'converters' ,'place_id', 'int(10) unsigned');
AddColumn($this, 'converters' ,'title', 'varchar(255)');
AddColumn($this, 'converters' ,'status', 'int(10) unsigned');

# Places
$attributes = array("ENGINE" => 'InnoDB');
$this->dbforge->add_field('id');
$this->dbforge->create_table('places', TRUE, $attributes);

AddColumn($this, 'places' ,'title', 'varchar(255)');
AddColumn($this, 'places' ,'place_id', 'int(255) unsigned');
AddColumn($this, 'places' ,'lft', 'int(255) unsigned');
AddColumn($this, 'places' ,'rgt', 'int(255) unsigned');
AddColumn($this, 'places' ,'uuid', 'varchar(255)');
AddColumn($this, 'places' ,'soft_key', 'varchar(255)');

$data = array(
        'id' => 1,
        'title' => 'Main',
        'place_id'  => 0,
        'lft'  => 1,
        'rgt'  => 2,
);

$this->db->replace('places', $data);




# marks
$attributes = array("ENGINE" => 'InnoDB');
$this->dbforge->add_field('id');
$this->dbforge->create_table('mark_converters', TRUE, $attributes);

AddColumn($this, 'mark_converters' ,'title', 'varchar(255)');
AddColumn($this, 'mark_converters' ,'ident', 'varchar(255)');

$data = array(
        'id' => 1,
        'title' => 'ERD',
        'ident' => 'ERD'
);

$this->db->replace('mark_converters', $data);







# models
$attributes = array("ENGINE" => 'InnoDB');
$this->dbforge->add_field('id');
$this->dbforge->create_table('model_converters', TRUE, $attributes);

AddColumn($this, 'model_converters' ,'title', 'varchar(255)');
AddColumn($this, 'model_converters' ,'ident', 'varchar(255)');
AddColumn($this, 'model_converters' ,'mark_id', 'int(255) unsigned');

$data = array(
        'id' => 1,
        'title' => 'ERD-3',
        'ident' => 'ERD-3',
        'mark_id' => 1
);

$this->db->replace('model_converters', $data);



include("include/e_counter_marks.php");
include("include/e_counter_models.php");


# e_counters
$attributes = array("ENGINE" => 'InnoDB');
$this->dbforge->add_field('id');
$this->dbforge->create_table('e_counters', TRUE, $attributes);

AddColumn($this, 'e_counters' ,'title', 'varchar(255)');
AddColumn($this, 'e_counters' ,'num_485', 'int(255) unsigned');
AddColumn($this, 'e_counters' ,'serial', 'varchar(255)');
AddColumn($this, 'e_counters' ,'converter_id', 'int(255) unsigned');
AddColumn($this, 'e_counters' ,'concentrator_id', 'int(255) unsigned');
AddColumn($this, 'e_counters' ,'model_id', 'int(255) unsigned');
AddColumn($this, 'e_counters' ,'status', 'int(10) unsigned');
AddColumn($this, 'e_counters' ,'place_id', 'int(10) unsigned');


# place
$attributes = array("ENGINE" => 'InnoDB');
$this->dbforge->add_field('id');
$this->dbforge->create_table('place', TRUE, $attributes);
AddColumn($this, 'place' ,'place_id', 'int(255) unsigned');
AddColumn($this, 'place' ,'title', 'varchar(255)');
AddColumn($this, 'place' ,'lft', 'int(255) unsigned');
AddColumn($this, 'place' ,'rgt', 'int(255) unsigned');
AddColumn($this, 'place' ,'licences', 'int(255) unsigned');



# usertmp
$attributes = array("ENGINE" => 'InnoDB');
$this->dbforge->add_field('id');
$this->dbforge->create_table('usertmp', TRUE, $attributes);
AddColumn($this, 'usertmp' ,'email', 'varchar(255)');
AddColumn($this, 'usertmp' ,'password', 'varchar(255)');
AddColumn($this, 'usertmp' ,'hash', 'varchar(255)');
AddColumn($this, 'usertmp' ,'is_trial', 'int(255) unsigned');


$attributes = array("ENGINE" => 'InnoDB');
$this->dbforge->add_field('id');
$this->dbforge->create_table('log', TRUE, $attributes);
AddColumn($this, 'log' ,'new_data', 'text');
AddColumn($this, 'log' ,'action', 'varchar(255)');
AddColumn($this, 'log' ,'table', 'varchar(255)');
AddColumn($this, 'log' ,'id_table', 'int(255) unsigned');
AddColumn($this, 'log' ,'user_id', 'int(255) unsigned');
AddColumn($this, 'log' ,'time', 'TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP');
AddColumn($this, 'log' ,'ip', 'int(255) unsigned');

$attributes = array("ENGINE" => 'InnoDB');
$this->dbforge->add_field('id');
$this->dbforge->create_table('data', TRUE, $attributes);
AddColumn($this, 'data' ,'meter_id', 'int(255) unsigned');
AddColumn($this, 'data' ,'added_ts', 'TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP');
AddColumn($this, 'data' ,'time', 'TIMESTAMP DEFAULT CURRENT_TIMESTAMP');
AddColumn($this, 'data' ,'parameter_id', 'int(255) unsigned');
AddColumn($this, 'data' ,'value', 'int(255) unsigned');



$attributes = array("ENGINE" => 'InnoDB');
$this->dbforge->add_field('id');
$this->dbforge->create_table('parameter', TRUE, $attributes);
AddColumn($this, 'parameter' ,'ident', 'varchar(255)');
AddColumn($this, 'parameter' ,'title', 'varchar(255)');
AddColumn($this, 'parameter' ,'divider', 'int(255) unsigned');
AddColumn($this, 'parameter' ,'round', 'int(255) unsigned');

include("include/parameter.php");


$attributes = array("ENGINE" => 'InnoDB');
$this->dbforge->add_field('id');
$this->dbforge->create_table('model_parameter', TRUE, $attributes);
AddColumn($this, 'model_parameter' ,'model_id', 'int(255) unsigned');
AddColumn($this, 'model_parameter' ,'parameter_id', 'int(255) unsigned');

include("include/model_parameter.php");

$attributes = array("ENGINE" => 'InnoDB');
$this->dbforge->add_field('id');
$this->dbforge->create_table('concentrator', TRUE, $attributes);
AddColumn($this, 'concentrator' ,'title', 'varchar(255)');
AddColumn($this, 'concentrator' ,'converter_id', 'int(255) unsigned');
AddColumn($this, 'concentrator' ,'model_id', 'int(255) unsigned');
AddColumn($this, 'concentrator' ,'place_id', 'int(255) unsigned');
AddColumn($this, 'concentrator' ,'addr', 'int(255) unsigned');
AddColumn($this, 'concentrator' ,'serial', 'varchar(255)');


include("include/mark_concentrator.php");
include("include/model_concentrator.php");


