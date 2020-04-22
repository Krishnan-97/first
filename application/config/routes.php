<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['pages/page_2'] = 'pages/page_2';
$route['pages/page_3'] = 'pages/page_3';

$route['default_controller'] = 'pages/view';
$route['(:any)'] = 'pages/view/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
