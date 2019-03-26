<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'admin';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['admin/converter/([0-9]*)'] = "converter/get_id/$1";
$route['admin/e_counters/([0-9]*)'] = "e_counters/get_id/$1";
$route['admin/e_counters/([0-9]*)/archive/([0-9]*)/([0-9]*)/([0-9]*)'] = "e_counters/get_id_archive/$1/$2/$3/$4";
$route['trial'] = "registration/index/trial";
