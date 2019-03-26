<?php


$id = 1;

$this->db->truncate('model_parameter');


$this->db->where("library" , "CE102");
$res_model = $this->db->get("model_ecounters");
foreach( $res_model->result() as $model ){

  foreach( array( "ENERGY_ACTIVE_TARIF_1" , 
    "ENERGY_ACTIVE_TARIF_2" , 
    "ENERGY_ACTIVE_TARIF_SUM") as $parameter ){

    $this->db->where("ident" , $parameter);
    $res = $this->db->get("parameter");

    $data = array(
      'id' => $id,
      'model_id' => $model->id,
      'parameter_id' => $res->row()->id
    );

    $this->db->replace('model_parameter', $data);

    $id++;

  }

}

$id = 50;



$this->db->where("library" , "CE301");
$res_model = $this->db->get("model_ecounters");
foreach( $res_model->result() as $model ){

  foreach( array( 
    "ENERGY_ACTIVE_TARIF_1" , 
    "ENERGY_ACTIVE_TARIF_2" , 
    "ENERGY_ACTIVE_TARIF_SUM" ,
    "PHASE_VOLTAGE_1",
    "PHASE_VOLTAGE_2",
    "PHASE_VOLTAGE_3",
    "PHASE_CURRENT_1",
    "PHASE_CURRENT_2",
    "PHASE_CURRENT_3",
    "PHASE_POWER_1",
    "PHASE_POWER_2",
    "PHASE_POWER_3"
  ) as $parameter ){

    $this->db->where("ident" , $parameter);
    $res = $this->db->get("parameter");

    $data = array(
      'id' => $id,
      'model_id' => $model->id,
      'parameter_id' => $res->row()->id
    );

    $this->db->replace('model_parameter', $data);

    $id++;

  }

}

$id = 100;




$this->db->where("library" , "CE301M");
$res_model = $this->db->get("model_ecounters");
foreach( $res_model->result() as $model ){

  foreach( array( "ENERGY_ACTIVE_TARIF_1" , 
    "ENERGY_ACTIVE_TARIF_2" , 
    "ENERGY_ACTIVE_TARIF_SUM" ) as $parameter ){

    $this->db->where("ident" , $parameter);
    $res = $this->db->get("parameter");

    $data = array(
      'id' => $id,
      'model_id' => $model->id,
      'parameter_id' => $res->row()->id
    );

    $this->db->replace('model_parameter', $data);

    $id++;

  }

}


$id = 150;


$this->db->where("library" , "MERKURY_234");
$res_model = $this->db->get("model_ecounters");
foreach( $res_model->result() as $model ){

  foreach( array( "ENERGY_ACTIVE_TARIF_1" , 
    "ENERGY_ACTIVE_TARIF_2" , 
    "ENERGY_ACTIVE_TARIF_SUM" ) as $parameter ){

    $this->db->where("ident" , $parameter);
    $res = $this->db->get("parameter");

    $data = array(
      'id' => $id,
      'model_id' => $model->id,
      'parameter_id' => $res->row()->id
    );

    $this->db->replace('model_parameter', $data);

    $id++;

  }

}


$id = 200;


$this->db->where("library" , "MILUR_107");
$res_model = $this->db->get("model_ecounters");
foreach( $res_model->result() as $model ){

  foreach( array( 
    "ENERGY_ACTIVE_TARIF_1" , 
    "ENERGY_ACTIVE_TARIF_2" , 
    "ENERGY_ACTIVE_TARIF_SUM" ,
    "PHASE_VOLTAGE_1",
    "PHASE_CURRENT_1",
    "PHASE_POWER_1"
  ) as $parameter ){

    $this->db->where("ident" , $parameter);
    $res = $this->db->get("parameter");

    $data = array(
      'id' => $id,
      'model_id' => $model->id,
      'parameter_id' => $res->row()->id
    );

    $this->db->replace('model_parameter', $data);

    $id++;

  }

}



$id = 250;


$this->db->where("library" , "MILUR_307");
$res_model = $this->db->get("model_ecounters");
foreach( $res_model->result() as $model ){

  foreach( array( 
    "ENERGY_ACTIVE_TARIF_1" , 
    "ENERGY_ACTIVE_TARIF_2" , 
    "ENERGY_ACTIVE_TARIF_SUM" ,
    "PHASE_VOLTAGE_1",
    "PHASE_VOLTAGE_2",
    "PHASE_VOLTAGE_3",
    "PHASE_CURRENT_1",
    "PHASE_CURRENT_2",
    "PHASE_CURRENT_3",
    "PHASE_POWER_1",
    "PHASE_POWER_2",
    "PHASE_POWER_3"
  ) as $parameter ){

    $this->db->where("ident" , $parameter);
    $res = $this->db->get("parameter");

    $data = array(
      'id' => $id,
      'model_id' => $model->id,
      'parameter_id' => $res->row()->id
    );

    $this->db->replace('model_parameter', $data);

    $id++;

  }

}



$id = 300;


$this->db->where("library" , "PSCH_3_ART");
$res_model = $this->db->get("model_ecounters");
foreach( $res_model->result() as $model ){

  foreach( array( 
    "ENERGY_ACTIVE_TARIF_1" , 
    "ENERGY_ACTIVE_TARIF_2" , 
    "ENERGY_ACTIVE_TARIF_SUM"
  ) as $parameter ){

    $this->db->where("ident" , $parameter);
    $res = $this->db->get("parameter");

    $data = array(
      'id' => $id,
      'model_id' => $model->id,
      'parameter_id' => $res->row()->id
    );

    $this->db->replace('model_parameter', $data);

    $id++;

  }

}

$id = 350;


$this->db->where("library" , "PSCH_3_TA");
$res_model = $this->db->get("model_ecounters");
foreach( $res_model->result() as $model ){

  foreach( array( 
    "ENERGY_ACTIVE_TARIF_1" , 
    "ENERGY_ACTIVE_TARIF_2" , 
    "ENERGY_ACTIVE_TARIF_SUM"
  ) as $parameter ){

    $this->db->where("ident" , $parameter);
    $res = $this->db->get("parameter");

    $data = array(
      'id' => $id,
      'model_id' => $model->id,
      'parameter_id' => $res->row()->id
    );

    $this->db->replace('model_parameter', $data);

    $id++;

  }

}

$id = 400;


$this->db->where("library" , "PSCH_4_TM_05");
$res_model = $this->db->get("model_ecounters");
foreach( $res_model->result() as $model ){

  foreach( array( 
    "ENERGY_ACTIVE_TARIF_1" , 
    "ENERGY_ACTIVE_TARIF_2" , 
    "ENERGY_ACTIVE_TARIF_SUM"
  ) as $parameter ){

    $this->db->where("ident" , $parameter);
    $res = $this->db->get("parameter");

    $data = array(
      'id' => $id,
      'model_id' => $model->id,
      'parameter_id' => $res->row()->id
    );

    $this->db->replace('model_parameter', $data);

    $id++;

  }

}



$id = 450;


$this->db->where("library" , "PSCH_4_TM_05_MK");
$res_model = $this->db->get("model_ecounters");
foreach( $res_model->result() as $model ){

  foreach( array( 
    "ENERGY_ACTIVE_TARIF_1" , 
    "ENERGY_ACTIVE_TARIF_2" , 
    "ENERGY_ACTIVE_TARIF_SUM"
  ) as $parameter ){

    $this->db->where("ident" , $parameter);
    $res = $this->db->get("parameter");

    $data = array(
      'id' => $id,
      'model_id' => $model->id,
      'parameter_id' => $res->row()->id
    );

    $this->db->replace('model_parameter', $data);

    $id++;

  }

}


$id = 500;

$this->db->where("library" , "PSCH_4_TM_05_MH");
$res_model = $this->db->get("model_ecounters");
foreach( $res_model->result() as $model ){

  foreach( array( 
    "ENERGY_ACTIVE_TARIF_1" , 
    "ENERGY_ACTIVE_TARIF_2" , 
    "ENERGY_ACTIVE_TARIF_SUM"
  ) as $parameter ){

    $this->db->where("ident" , $parameter);
    $res = $this->db->get("parameter");

    $data = array(
      'id' => $id,
      'model_id' => $model->id,
      'parameter_id' => $res->row()->id
    );

    $this->db->replace('model_parameter', $data);

    $id++;

  }

}


$id = 550;

$this->db->where("library" , "MERKURY_230");
$res_model = $this->db->get("model_ecounters");
foreach( $res_model->result() as $model ){

  foreach( array( 
    "ENERGY_ACTIVE_TARIF_1" , 
    "ENERGY_ACTIVE_TARIF_2" , 
    "ENERGY_ACTIVE_TARIF_SUM"
  ) as $parameter ){

    $this->db->where("ident" , $parameter);
    $res = $this->db->get("parameter");

    $data = array(
      'id' => $id,
      'model_id' => $model->id,
      'parameter_id' => $res->row()->id
    );

    $this->db->replace('model_parameter', $data);

    $id++;

  }

}


$id = 600;



$this->db->where("library" , "MERKURY_206");
$res_model = $this->db->get("model_ecounters");
foreach( $res_model->result() as $model ){

  foreach( array( 
    "ENERGY_ACTIVE_TARIF_1" , 
    "ENERGY_ACTIVE_TARIF_2" , 
    "ENERGY_ACTIVE_TARIF_SUM"
  ) as $parameter ){

    $this->db->where("ident" , $parameter);
    $res = $this->db->get("parameter");

    $data = array(
      'id' => $id,
      'model_id' => $model->id,
      'parameter_id' => $res->row()->id
    );

    $this->db->replace('model_parameter', $data);

    $id++;

  }

}


$id = 660;

$this->db->where("library" , "MERKURY_225_1");
$res_model = $this->db->get("model_ecounters");
foreach( $res_model->result() as $model ){

  foreach( array( 
    "ENERGY_ACTIVE_TARIF_1" , 
    "ENERGY_ACTIVE_TARIF_2" , 
    "ENERGY_ACTIVE_TARIF_SUM"
  ) as $parameter ){

    $this->db->where("ident" , $parameter);
    $res = $this->db->get("parameter");

    $data = array(
      'id' => $id,
      'model_id' => $model->id,
      'parameter_id' => $res->row()->id
    );

    $this->db->replace('model_parameter', $data);

    $id++;

  }

}

$id = 700;

$this->db->where("library" , "CE102M");
$res_model = $this->db->get("model_ecounters");
foreach( $res_model->result() as $model ){

  foreach( array( "ENERGY_ACTIVE_TARIF_1" , 
    "ENERGY_ACTIVE_TARIF_2" , 
    "ENERGY_ACTIVE_TARIF_SUM",
    "PHASE_VOLTAGE_1",
    "PHASE_CURRENT_1",
    "PHASE_POWER_1") as $parameter ){

    $this->db->where("ident" , $parameter);
    $res = $this->db->get("parameter");

    $data = array(
      'id' => $id,
      'model_id' => $model->id,
      'parameter_id' => $res->row()->id
    );

    $this->db->replace('model_parameter', $data);

    $id++;

  }

}
