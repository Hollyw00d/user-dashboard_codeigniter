<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$route['default_controller'] = 'userdashboard';
$route['404_override'] = '';

// Routes for methods in the "userdashboard" controller
$route['signin'] = 'userdashboard/signin';
$route['register'] = 'userdashboard/register';
$route['dashboard/admin'] = 'userdashboard/admin';
$route['dashboard'] = 'userdashboard/normaluser';

//end of routes.php