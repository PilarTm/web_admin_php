<?php


# models
$attributes = array("ENGINE" => 'InnoDB');
$this->dbforge->add_field('id');
$this->dbforge->create_table('model_ecounters', TRUE, $attributes);

AddColumn($this, 'model_ecounters' ,'title', 'varchar(255)');
AddColumn($this, 'model_ecounters' ,'library', 'varchar(255)');
AddColumn($this, 'model_ecounters' ,'mark_id', 'int(255) unsigned');


foreach (array(
  array(
    'title' => 'CE102 R5',
    'library' => 'CE102',
    'mark_id' => 1
  ),
  array(
    'title' => 'CE102 R5.1',
    'library' => 'CE102',
    'mark_id' => 1
  ),
  array(
    'title' => 'CE102 R5.AK',
    'library' => 'CE102',
    'mark_id' => 1
  ),
  array(
    'title' => 'CE102 S6',
    'library' => 'CE102',
    'mark_id' => 1
  ),
  array(
    'title' => 'CE102 S7',
    'library' => 'CE102',
    'mark_id' => 1
  ),
  array(
    'title' => 'CE102 S7J',
    'library' => 'CE102',
    'mark_id' => 1
  ),
  array(
    'title' => 'CE102 R8',
    'library' => 'CE102',
    'mark_id' => 1
  ),
  array(
    'title' => 'CE102 R8Q',
    'library' => 'CE102',
    'mark_id' => 1
  ),
  array(
    'title' => 'CE102 R5.1 145-JAN',
    'library' => 'CE102',
    'mark_id' => 1
  ),


    # CE102M
  array(
    'title' => 'CE102M',
    'library' => 'CE102M',
    'mark_id' => 2
  ),
  array(
    'title' => 'CE102M S7 145-AV',
    'library' => 'CE102M',
    'mark_id' => 2
  ),
  array(
    'title' => 'CE102M S7 145-AV',
    'library' => 'CE102M',
    'mark_id' => 2
  ),
  array(
    'title' => 'CE102M S7 148-AV',
    'library' => 'CE102M',
    'mark_id' => 2
  ),
  array(
    'title' => 'CE102M R5 145-A',
    'library' => 'CE102M',
    'mark_id' => 2
  ),
  array(
    'title' => 'CE102M R5 148-A',
    'library' => 'CE102M',
    'mark_id' => 2
  ),
  array(
    'title' => 'CE301 R33 043 JAZ',
    'library' => 'CE301',
    'mark_id' => 3
  ),
  array(
    'title' => 'CE301 R33 043 JAQZ',
    'library' => 'CE301',
    'mark_id' => 3
  ),
  array(
    'title' => 'CE301 R33 145 JAZ',
    'library' => 'CE301',
    'mark_id' => 3
  ),
  array(
    'title' => 'CE301 R33 145 JAQZ',
    'library' => 'CE301',
    'mark_id' => 3
  ),
  array(
    'title' => 'CE301 R33 146 JAZ',
    'library' => 'CE301',
    'mark_id' => 3
  ),
  array(
    'title' => 'CE301 R33 146 JAQZ',
    'library' => 'CE301',
    'mark_id' => 3
  ),
  array(
    'title' => 'CE301 S31 146 JAVZ',
    'library' => 'CE301',
    'mark_id' => 3
  ),
  array(
    'title' => 'CE301 S31 146 JAVZ(12)',
    'library' => 'CE301',
    'mark_id' => 3
  ),
  array(
    'title' => 'CE301M S31 145 JAVZ',
    'library' => 'CE301M',
    'mark_id' => 4
  ),
  array(
    'title' => 'CE301M S31 148 JAVZ',
    'library' => 'CE301M',
    'mark_id' => 4
  ),
  array(
    'title' => 'CE301M S31 145 JASVZ',
    'library' => 'CE301M',
    'mark_id' => 4
  ),
  array(
    'title' => 'CE301M S31 148 JASVZ',
    'library' => 'CE301M',
    'mark_id' => 4
  ),
  array(
    'title' => 'CE301М R33 145 JAZ',
    'library' => 'CE301M',
    'mark_id' => 4
  ),
  array(
    'title' => 'CE301M R33 148 JAZ',
    'library' => 'CE301M',
    'mark_id' => 4
  ),
  array(
    'title' => 'CE301М R33 145 JASZ',
    'library' => 'CE301M',
    'mark_id' => 4
  ),
  array(
    'title' => 'CE301М R33 148 JASZ',
    'library' => 'CE301M',
    'mark_id' => 4
  ),
  array(
    'title' => 'CE301M',
    'library' => 'CE301M',
    'mark_id' => 4
  ),
  array(
    'title' => 'Меркурий 234',
    'library' => 'MERKURY_234',
    'mark_id' => 7
  ),
  array(
    'title' => 'Меркурий 234 ART-00 P',
    'library' => 'MERKURY_234',
    'mark_id' => 7
  ),
  array(
    'title' => 'Меркурий 234 ART-01 P',
    'library' => 'MERKURY_234',
    'mark_id' => 7
  ),
  array(
    'title' => 'Меркурий 234 ART-01 PO',
    'library' => 'MERKURY_234',
    'mark_id' => 7
  ),
  array(
    'title' => 'Меркурий 234 ART-02 P',
    'library' => 'MERKURY_234',
    'mark_id' => 7
  ),
  array(
    'title' => 'Меркурий 234 ART-03 P',
    'library' => 'MERKURY_234',
    'mark_id' => 7
  ),
  array(
    'title' => 'Меркурий 234 ART2-00 P',
    'library' => 'MERKURY_234',
    'mark_id' => 7
  ),
  array(
    'title' => 'Меркурий 234 ART2-03 P',
    'library' => 'MERKURY_234',
    'mark_id' => 7
  ),
  array(
    'title' => 'Меркурий 234 ART-01 OL1',
    'library' => 'MERKURY_234',
    'mark_id' => 7
  ),
  array(
    'title' => 'Меркурий 234 ART-02 L1',
    'library' => 'MERKURY_234',
    'mark_id' => 7
  ),
  array(
    'title' => 'Милур 107',
    'library' => 'MILUR_107',
    'mark_id' => 8
  ),
  array(
    'title' => 'Милур 107.22R-1L',
    'library' => 'MILUR_107',
    'mark_id' => 8
  ),
  array(
    'title' => 'Милур 107.22R-1L-D',
    'library' => 'MILUR_107',
    'mark_id' => 8
  ),
  array(
    'title' => 'Милур 107.22R-1L-DT',
    'library' => 'MILUR_107',
    'mark_id' => 8
  ),
  array(
    'title' => 'Милур 107.22R-1L-T',
    'library' => 'MILUR_107',
    'mark_id' => 8
  ),

  array(
    'title' => 'Милур 307.11R1',
    'library' => 'MILUR_307',
    'mark_id' => 9
  ),
  array(
    'title' => 'Милур 307.21R1',
    'library' => 'MILUR_307',
    'mark_id' => 9
  ),
  array(
    'title' => 'Милур 307.11R1L',
    'library' => 'MILUR_307',
    'mark_id' => 9
  ),
  array(
    'title' => 'Милур 307.21R1L',
    'library' => 'MILUR_307',
    'mark_id' => 9
  ),
  array(
    'title' => 'Милур 307.11R1i',
    'library' => 'MILUR_307',
    'mark_id' => 9
  ),
  array(
    'title' => 'Милур 307.21R1i',
    'library' => 'MILUR_307',
    'mark_id' => 9
  ),
  array(
    'title' => 'Милур 307.11R1Li',
    'library' => 'MILUR_307',
    'mark_id' => 9
  ),
  array(
    'title' => 'Милур 307.21R1Li',
    'library' => 'MILUR_307',
    'mark_id' => 9
  ),
  array(
    'title' => 'Милур 307.12R1',
    'library' => 'MILUR_307',
    'mark_id' => 9
  ),
  array(
    'title' => 'Милур 307.22R1',
    'library' => 'MILUR_307',
    'mark_id' => 9
  ),
  array(
    'title' => 'Милур 307.12R1L',
    'library' => 'MILUR_307',
    'mark_id' => 9
  ),
  array(
    'title' => 'Милур 307.22R1L',
    'library' => 'MILUR_307',
    'mark_id' => 9
  ),
  array(
    'title' => 'Милур 307.12R1i',
    'library' => 'MILUR_307',
    'mark_id' => 9
  ),
  array(
    'title' => 'Милур 307.22R1i',
    'library' => 'MILUR_307',
    'mark_id' => 9
  ),
  array(
    'title' => 'Милур 307.12R1Li',
    'library' => 'MILUR_307',
    'mark_id' => 9
  ),
  array(
    'title' => 'Милур 307.22R1Li',
    'library' => 'MILUR_307',
    'mark_id' => 9
  ),
  array(
    'title' => 'Милур 307.42R1',
    'library' => 'MILUR_307',
    'mark_id' => 9
  ),
  array(
    'title' => 'Милур 307.42RL',
    'library' => 'MILUR_307',
    'mark_id' => 9
  ),
  array(
    'title' => 'Милур 307.42R1i',
    'library' => 'MILUR_307',
    'mark_id' => 9
  ),
  array(
    'title' => 'Милур 307.42R1Li',
    'library' => 'MILUR_307',
    'mark_id' => 9
  ),
  array(
    'title' => 'Милур 307',
    'library' => 'MILUR_307',
    'mark_id' => 9
  ),
  array(
    'title' => 'ПСЧ-3АРТ.07.132',
    'library' => 'PSCH_3_ART',
    'mark_id' => 10
  ),
  array(
    'title' => 'ПСЧ-3АРТ.07.132.1',
    'library' => 'PSCH_3_ART',
    'mark_id' => 10
  ),
  array(
    'title' => 'ПСЧ-3АРТ.07.632',
    'library' => 'PSCH_3_ART',
    'mark_id' => 10
  ),
  array(
    'title' => 'ПСЧ-3АРТ.07.632.1',
    'library' => 'PSCH_3_ART',
    'mark_id' => 10
  ),
  array(
    'title' => 'ПСЧ-3АРТ.07.132.2',
    'library' => 'PSCH_3_ART',
    'mark_id' => 10
  ),
  array(
    'title' => 'ПСЧ-3АРТ.07.132.4',
    'library' => 'PSCH_3_ART',
    'mark_id' => 10
  ),
  array(
    'title' => 'ПСЧ-3АРТ.07.132.3',
    'library' => 'PSCH_3_ART',
    'mark_id' => 10
  ),
  array(
    'title' => 'ПСЧ-3АРТ.07',
    'library' => 'PSCH_3_ART',
    'mark_id' => 10
  ),
  array(
    'title' => 'ПСЧ-3ТА.07.112',
    'library' => 'PSCH_3_TA',
    'mark_id' => 11
  ),
  array(
    'title' => 'ПСЧ-3ТА.07.112.1',
    'library' => 'PSCH_3_TA',
    'mark_id' => 11
  ),
  array(
    'title' => 'ПСЧ-3ТА.07.112.2',
    'library' => 'PSCH_3_TA',
    'mark_id' => 11
  ),
  array(
    'title' => 'ПСЧ-3ТА.07.312',
    'library' => 'PSCH_3_TA',
    'mark_id' => 11
  ),
  array(
    'title' => 'ПСЧ-3ТА.07.312.1',
    'library' => 'PSCH_3_TA',
    'mark_id' => 11
  ),
  array(
    'title' => 'ПСЧ-3ТА.07.512',
    'library' => 'PSCH_3_TA',
    'mark_id' => 11
  ),
  array(
    'title' => 'ПСЧ-3ТА.07.512.1',
    'library' => 'PSCH_3_TA',
    'mark_id' => 11
  ),
  array(
    'title' => 'ПСЧ-3ТА.07.612',
    'library' => 'PSCH_3_TA',
    'mark_id' => 11
  ),
  array(
    'title' => 'ПСЧ-3ТА.07.612.1',
    'library' => 'PSCH_3_TA',
    'mark_id' => 11
  ),
  array(
    'title' => 'ПСЧ-3ТА.07',
    'library' => 'PSCH_3_TA',
    'mark_id' => 11
  ),
  array(
    'title' => 'ПСЧ-3ТМ.05Д.01',
    'library' => 'PSCH_3_TM',
    'mark_id' => 12
  ),
  array(
    'title' => 'ПСЧ-3ТМ.05Д.03',
    'library' => 'PSCH_3_TA',
    'mark_id' => 12
  ),
  array(
    'title' => 'ПСЧ-3ТМ.05Д.05',
    'library' => 'PSCH_3_TA',
    'mark_id' => 12
  ),
  array(
    'title' => 'ПСЧ-4ТМ.05МД.01',
    'library' => 'PSCH_4_TM_05',
    'mark_id' => 13
  ),
  array(
    'title' => 'ПСЧ-4ТМ.05МД.03',
    'library' => 'PSCH_4_TM_05',
    'mark_id' => 13
  ),
  array(
    'title' => 'ПСЧ-4ТМ.05МД.05',
    'library' => 'PSCH_4_TM_05',
    'mark_id' => 13
  ),
  array(
    'title' => 'ПСЧ-4ТМ.05МД.07',
    'library' => 'PSCH_4_TM_05',
    'mark_id' => 13
  ),
  array(
    'title' => 'ПСЧ-4ТМ.05МД.09',
    'library' => 'PSCH_4_TM_05',
    'mark_id' => 13
  ),
  array(
    'title' => 'ПСЧ-4ТМ.05МД.11',
    'library' => 'PSCH_4_TM_05',
    'mark_id' => 13
  ),
  array(
    'title' => 'ПСЧ-4ТМ.05МД.13',
    'library' => 'PSCH_4_TM_05',
    'mark_id' => 13
  ),
  array(
    'title' => 'ПСЧ-4ТМ.05МД.15',
    'library' => 'PSCH_4_TM_05',
    'mark_id' => 13
  ),
  array(
    'title' => 'ПСЧ-4ТМ.05МД.17',
    'library' => 'PSCH_4_TM_05',
    'mark_id' => 13
  ),
  array(
    'title' => 'ПСЧ-4ТМ.05МД.19',
    'library' => 'PSCH_4_TM_05',
    'mark_id' => 13
  ),
  array(
    'title' => 'ПСЧ-4ТМ.05МД.21',
    'library' => 'PSCH_4_TM_05',
    'mark_id' => 13
  ),
  array(
    'title' => 'ПСЧ-4ТМ.05МД.23',
    'library' => 'PSCH_4_TM_05',
    'mark_id' => 13
  ),
  array(
    'title' => 'ПСЧ-4ТМ.05МД.25',
    'library' => 'PSCH_4_TM_05',
    'mark_id' => 13
  ),
  array(
    'title' => 'ПСЧ-4ТМ.05МД',
    'library' => 'PSCH_4_TM_05',
    'mark_id' => 13
  ),
  array(
    'title' => 'ПСЧ-4ТМ.05МК.00',
    'library' => 'PSCH_4_TM_05_MK',
    'mark_id' => 14
  ),
  array(
    'title' => 'ПСЧ-4ТМ.05МК.01',
    'library' => 'PSCH_4_TM_05_MK',
    'mark_id' => 14
  ),
  array(
    'title' => 'ПСЧ-4ТМ.05МК.02',
    'library' => 'PSCH_4_TM_05_MK',
    'mark_id' => 14
  ),
  array(
    'title' => 'ПСЧ-4ТМ.05МК.03',
    'library' => 'PSCH_4_TM_05_MK',
    'mark_id' => 14
  ),
  array(
    'title' => 'ПСЧ-4ТМ.05МК.04',
    'library' => 'PSCH_4_TM_05_MK',
    'mark_id' => 14
  ),
  array(
    'title' => 'ПСЧ-4ТМ.05МК.05',
    'library' => 'PSCH_4_TM_05_MK',
    'mark_id' => 14
  ),
  array(
    'title' => 'ПСЧ-4ТМ.05МК.06',
    'library' => 'PSCH_4_TM_05_MK',
    'mark_id' => 14
  ),
  array(
    'title' => 'ПСЧ-4ТМ.05МК.07',
    'library' => 'PSCH_4_TM_05_MK',
    'mark_id' => 14
  ),
  array(
    'title' => 'ПСЧ-4ТМ.05МК.08',
    'library' => 'PSCH_4_TM_05_MK',
    'mark_id' => 14
  ),
  array(
    'title' => 'ПСЧ-4ТМ.05МК.09',
    'library' => 'PSCH_4_TM_05_MK',
    'mark_id' => 14
  ),
  array(
    'title' => 'ПСЧ-4ТМ.05МК.10',
    'library' => 'PSCH_4_TM_05_MK',
    'mark_id' => 14
  ),
  array(
    'title' => 'ПСЧ-4ТМ.05МК.11',
    'library' => 'PSCH_4_TM_05_MK',
    'mark_id' => 14
  ),
  array(
    'title' => 'ПСЧ-4ТМ.05МК.12',
    'library' => 'PSCH_4_TM_05_MK',
    'mark_id' => 14
  ),
  array(
    'title' => 'ПСЧ-4ТМ.05МК.13',
    'library' => 'PSCH_4_TM_05_MK',
    'mark_id' => 14
  ),
  array(
    'title' => 'ПСЧ-4ТМ.05МК.14',
    'library' => 'PSCH_4_TM_05_MK',
    'mark_id' => 14
  ),
  array(
    'title' => 'ПСЧ-4ТМ.05МК.15',
    'library' => 'PSCH_4_TM_05_MK',
    'mark_id' => 14
  ),
  array(
    'title' => 'ПСЧ-4ТМ.05МК.16',
    'library' => 'PSCH_4_TM_05_MK',
    'mark_id' => 14
  ),
  array(
    'title' => 'ПСЧ-4ТМ.05МК.17',
    'library' => 'PSCH_4_TM_05_MK',
    'mark_id' => 14
  ),
  array(
    'title' => 'ПСЧ-4ТМ.05МК.18',
    'library' => 'PSCH_4_TM_05_MK',
    'mark_id' => 14
  ),
  array(
    'title' => 'ПСЧ-4ТМ.05МК.19',
    'library' => 'PSCH_4_TM_05_MK',
    'mark_id' => 14
  ),
  array(
    'title' => 'ПСЧ-4ТМ.05МК.20',
    'library' => 'PSCH_4_TM_05_MK',
    'mark_id' => 14
  ),
  array(
    'title' => 'ПСЧ-4ТМ.05МК.21',
    'library' => 'PSCH_4_TM_05_MK',
    'mark_id' => 14
  ),
  array(
    'title' => 'ПСЧ-4ТМ.05МК.22',
    'library' => 'PSCH_4_TM_05_MK',
    'mark_id' => 14
  ),
  array(
    'title' => 'ПСЧ-4ТМ.05МК.23',
    'library' => 'PSCH_4_TM_05_MK',
    'mark_id' => 14
  ),
  array(
    'title' => 'ПСЧ-4ТМ.05МК.24',
    'library' => 'PSCH_4_TM_05_MK',
    'mark_id' => 14
  ),
  array(
    'title' => 'ПСЧ-4ТМ.05МК.25',
    'library' => 'PSCH_4_TM_05_MK',
    'mark_id' => 14
  ),
  array(
    'title' => 'ПСЧ-4ТМ.05МК',
    'library' => 'PSCH_4_TM_05_MK',
    'mark_id' => 14
  ),
  array(
    'title' => 'ПСЧ-4ТМ.05МН.00',
    'library' => 'PSCH_4_TM_05_MH',
    'mark_id' => 15
  ),
  array(
    'title' => 'ПСЧ-4ТМ.05МН.01',
    'library' => 'PSCH_4_TM_05_MH',
    'mark_id' => 15
  ),
  array(
    'title' => 'ПСЧ-4ТМ.05МН.02',
    'library' => 'PSCH_4_TM_05_MH',
    'mark_id' => 15
  ),
  array(
    'title' => 'ПСЧ-4ТМ.05МН.03',
    'library' => 'PSCH_4_TM_05_MH',
    'mark_id' => 15
  ),
  array(
    'title' => 'ПСЧ-4ТМ.05МН',
    'library' => 'PSCH_4_TM_05_MH',
    'mark_id' => 15
  ),
  
  array(
    'title' => 'Меркурий 230',
    'library' => 'MERKURY_230',
    'mark_id' => 16
  ),
  array(
    'title' => 'Меркурий 230 ART-03 CN',
    'library' => 'MERKURY_230',
    'mark_id' => 16
  ),
  array(
    'title' => 'Меркурий 230 АR-00 R',
    'library' => 'MERKURY_230',
    'mark_id' => 16
  ),
  array(
    'title' => 'Меркурий 230 АR-01 R',
    'library' => 'MERKURY_230',
    'mark_id' => 16
  ),
  array(
    'title' => 'Меркурий 230 АR-02 R',
    'library' => 'MERKURY_230',
    'mark_id' => 16
  ),
  array(
    'title' => 'Меркурий 230 АR-03 R',
    'library' => 'MERKURY_230',
    'mark_id' => 16
  ),
  array(
    'title' => 'Меркурий 206',
    'library' => 'MERKURY_206',
    'mark_id' => 17
  ),

  

) as $key => $value) {
  $value['id'] = $key +1;
  $this->db->replace('model_ecounters', $value);
}
