<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'Admins';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//scout Api
$route['api/scout/login'] = 'api/Scout_api/login';
$route['api/scout/refresh-token'] = 'api/Scout_api/refresh_token';

//admin panel
$route['admin'] = 'admin/Admins';
//admin logout
$route['admin/login'] = 'admin/Login';
$route['admin/logout'] = 'admin/Login/logout';
//admin settings
$route['admin/profile'] = 'admin/Admins/profile';
$route['admin/settings'] = 'admin/Admins/settings';
$route['admin/settings/update/(:any)'] = 'admin/Admins/update/$1';

//super admin routs for create users
$route['admin/register-scout'] = 'admin/Admins/register_scout';
$route['admin/register-admin'] = 'admin/Admins/register_scout';

//Region Crud
$route['admin/regions'] = 'admin/Regions';
$route['admin/regions/create'] = 'admin/Regions/create';
$route['admin/regions/store'] = 'admin/Regions/store';
$route['admin/regions/edit/(:any)'] = 'admin/Regions/edit/$1';
$route['admin/regions/update/(:any)'] = 'admin/Regions/update/$1';
$route['admin/regions/change-status/(:any)'] = 'admin/Regions/change_status/$1';

//School Crud
$route['admin/schools'] = 'admin/Schools';
$route['admin/schools/create'] = 'admin/Schools/create';
$route['admin/schools/store'] = 'admin/Schools/store';
$route['admin/schools/edit/(:any)'] = 'admin/Schools/edit/$1';
$route['admin/schools/update/(:any)'] = 'admin/Schools/update/$1';
$route['admin/schools/change-status/(:any)'] = 'admin/Schools/change_status/$1';

//Sport Types Crud
$route['admin/sport-types'] = 'admin/SportTypes';
$route['admin/sport-types/create'] = 'admin/SportTypes/create';
$route['admin/sport-types/store'] = 'admin/SportTypes/store';
$route['admin/sport-types/edit/(:any)'] = 'admin/SportTypes/edit/$1';
$route['admin/sport-types/update/(:any)'] = 'admin/SportTypes/update/$1';
$route['admin/sport-types/change-status/(:any)'] = 'admin/SportTypes/change_status/$1';

