<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$route['default_controller'] = 'userdashboard';
$route['404_override'] = '';

// Routes for methods in the "userdashboard" controller
$route['signin'] = 'userdashboard/signin';

// Registration page
$route['register'] = 'userdashboard/register';

// Add new user
$route['register/newuser'] = 'userdashboard/registernewuser';

$route['dashboard/admin'] = 'userdashboard/admin';
$route['dashboard'] = 'userdashboard/normaluser';
$route['dashboard/user/profile'] = 'userdashboard/userprofile';

$route['dashboard/checksignin'] = 'userdashboard/checksignin';

$route['users/new'] = 'userdashboard/adduser';


// Show single user record
$route['dashboard/user/(:num)'] = 'userdashboard/showsinglerecord/$1';





$route['reset'] = 'userdashboard/destroy';

//end of routes.php