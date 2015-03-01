<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$route['contact-us'] = 'frontend/contact_us';
$route['programs/(:any)'] = 'frontend/home/programs';
$route['research'] = 'frontend/home/research';
$route['(en|th)/about-us'] = 'about_us';
$route['default_controller'] = 'about_us';
$route['404_override'] = '';

/* End of file routes.php */
/* Location: ./application/config/routes.php */