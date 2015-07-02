<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$route['default_controller'] = 'userdashboard';
$route['404_override'] = '';

// Routes for methods in the "userdashboard" controller
$route['signin'] = 'userdashboard/signin';
$route['register'] = 'userdashboard/register';

$route['dashboard/admin'] = 'userdashboard/admin';
$route['dashboard'] = 'userdashboard/normaluser';
$route['dashboard/user/profile'] = 'userdashboard/userprofile';

$route['dashboard/checksignin'] = 'userdashboard/checksignin';

$route['users/new'] = 'userdashboard/adduser';

$route['reset'] = 'userdashboard/destroy';

//end of routes.php