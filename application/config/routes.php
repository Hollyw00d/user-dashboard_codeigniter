<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$route['default_controller'] = 'userdashboard';
$route['404_override'] = '';

// Routes for methods in the "userdashboard" controller
$route['signin'] = 'userdashboard/signin';

// Registration page
$route['register'] = 'userdashboard/register';

// Add new user
$route['register/newuser'] = 'userdashboard/registernewuser';

// Admin home page after signing in
$route['dashboard/admin'] = 'userdashboard/admin';

// For Admins only, a page to show a single user to
// update
$route['users/edit/(:num)'] = 'userdashboard/adminupdateuser/$1';

// For Admins only, a page to actually update
// a single user
$route['users/edit/process/(:num)'] = 'userdashboard/executeupdatesingleuser/$1';




// Normal user home page after signing in
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