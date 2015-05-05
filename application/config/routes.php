<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$route['(en|th)'] = 'home/index';
$route['(en|th)/home'] = 'home/index';

$route['(en|th)/about-us/(:any)'] = 'about_us/index';
$route['(en|th)/about_us/do_send_mail'] = 'about_us/do_send_mail';

$route['(en|th)/news-events/(:any)'] = 'news_events/index';

$route['(en|th)/programs/(:any)'] = 'programs/index';

$route['(en|th)/people/(:any)'] = 'people/index';
$route['(en|th)/people/(:any)/(:any)'] = 'people/index';

$route['(en|th)/research'] = 'research/index';

$route['(en|th)/collaborating-research-units'] = 'cru/index';

$route['(en|th)/facilities'] = 'facilities/index';

$route['(en|th)/alumni'] = 'alumni/index';

$route['(en|th)/student-life'] = 'student_life/index';

$route['admin'] = 'admin/dashboard/index';

$route['default_controller'] = 'home/index';

$route['404_override'] = '';

/* End of file routes.php */
/* Location: ./application/config/routes.php */