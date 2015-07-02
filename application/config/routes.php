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

// When logged in as an admin goes to the
// page to add a new user
$route['users/new'] = 'userdashboard/adduser';

// Actually inserts a new user into the database
$route['users/new/process'] = 'userdashboard/insertuserintodb';






$route['reset'] = 'userdashboard/destroy';

//end of routes.php