<?php

# marks
$attributes = array("ENGINE" => 'InnoDB');
$this->dbforge->add_field('id');
$this->dbforge->create_table('mark_ecounters', TRUE, $attributes);

AddColumn($this, 'mark_ecounters' ,'title', 'varchar(255)');

$data = array(
        'id' => 1,
        'title' => 'CE102',
);
$this->db->replace('mark_ecounters', $data);

$data = array(
        'id' => 2,
        'title' => 'CE102M',
);
$this->db->replace('mark_ecounters', $data);

$data = array(
        'id' => 3,
        'title' => 'CE301',
);
$this->db->replace('mark_ecounters', $data);

$data = array(
        'id' => 4,
        'title' => 'СЕ301М',
);
$this->db->replace('mark_ecounters', $data);

$data = array(
        'id' => 7,
        'title' => 'Меркурий 234',
);
$this->db->replace('mark_ecounters', $data);

$data = array(
        'id' => 8,
        'title' => 'Милур 107',
);
$this->db->replace('mark_ecounters', $data);

$data = array(
        'id' => 9,
        'title' => 'Милур 307',
);
$this->db->replace('mark_ecounters', $data);

$data = array(
        'id' => 10,
        'title' => 'ПСЧ-3АРТ.07',
);
$this->db->replace('mark_ecounters', $data);

$data = array(
        'id' => 11,
        'title' => 'ПСЧ-3ТА.07',
);
$this->db->replace('mark_ecounters', $data);

$data = array(
        'id' => 12,
        'title' => 'ПСЧ-3ТМ.05Д',
);
$this->db->replace('mark_ecounters', $data);

$data = array(
        'id' => 13,
        'title' => 'ПСЧ-4ТМ.05МД',
);
$this->db->replace('mark_ecounters', $data);

$data = array(
        'id' => 14,
        'title' => 'ПСЧ-4ТМ.05МК',
);
$this->db->replace('mark_ecounters', $data);

$data = array(
        'id' => 15,
        'title' => 'ПСЧ-4ТМ.05МН',
);
$this->db->replace('mark_ecounters', $data);


$data = array(
        'id' => 16,
        'title' => 'Меркурий 230',
);
$this->db->replace('mark_ecounters', $data);


$data = array(
        'id' => 17,
        'title' => 'Меркурий 206',
);
$this->db->replace('mark_ecounters', $data);



$data = array(
        'id' => 18,
        'title' => 'Меркурий 225.1 (Пперенести в концентратор)',
);
$this->db->replace('mark_ecounters', $data);

