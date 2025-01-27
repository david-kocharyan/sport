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
$route['default_controller'] = 'Home';
$route['^(en|ar)'] = $route['default_controller'];
$route['404_override'] = 'Errors/_404';
$route['translate_uri_dashes'] = FALSE;

//users (observers) Api
$route['api/users/login'] = 'api/Users_api/login';
$route['api/users/forgot-password'] = 'api/Users_api/forgot_password';
$route['api/users/get-user'] = 'api/Users_api/get_user';
$route['api/users/refresh-token'] = 'api/Users_api/refresh_token';
$route['api/users/logout'] = 'api/Users_api/logout';

//game Api
$route['api/games/get-sport-type'] = 'api/Sport_api';
$route['api/games/get-games'] = 'api/Games_api';
$route['api/games/get-game-students'] = 'api/Games_api/team_students';
$route['api/games/get-referee'] = 'api/Games_api/referee';
$route['api/games/get-coaches'] = 'api/Games_api/coaches';
$route['api/games/get-points'] = 'api/Games_api/points';
$route['api/games/end'] = 'api/End_api/end';

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//Site

//$route['^(en|ar)/upcoming-game/(:any)'] = 'site/Upcoming/upcoming/$2';
$route['^(en|ar)/topic/(:any)'] = 'site/Blogs/topic/$2';
$route['^(en|ar)/activites/(:any)'] = 'site/Activites/get_game/$2';
$route['^(en|ar)/game/(:any)'] = 'site/Activites/game/$2';
$route['^(en|ar)/game-school/(:any)'] = 'site/Schools/schools/$2';

$route['^(en|ar)/send-msg'] = 'site/Contact/send';

$route['change'] = 'Home/change';
$route['^(en|ar)/observers'] = 'site/Observers';
$route['^(en|ar)/referee'] = 'site/Referees';

$route['^(en|ar)/all-news'] = 'site/Blogs/all_blogs';
$route['^(en|ar)/all-upcoming-games'] = 'site/Upcoming/all_upcoming_games';

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//admin panel
//$route['admin'] = 'admin/Admins';
$route['admin'] = 'admin/Blogs';

//admin logout
$route['admin/login'] = 'admin/Login';
$route['admin/logout'] = 'admin/Login/logout';
//admin settings
//$route['admin/profile'] = 'admin/Admins/profile';
$route['admin/settings'] = 'admin/Admins/settings';
$route['admin/settings/update/(:any)'] = 'admin/Admins/update/$1';

//create admins (moderators) crud
$route['admin/moderators'] = 'admin/Moderators';
$route['admin/moderators/create'] = 'admin/Moderators/create';
$route['admin/moderators/store'] = 'admin/Moderators/store';
$route['admin/moderators/edit/(:any)'] = 'admin/Moderators/edit/$1';
$route['admin/moderators/update/(:any)'] = 'admin/Moderators/update/$1';
$route['admin/moderators/change-status/(:any)'] = 'admin/Moderators/change_status/$1';

//create coaches crud
$route['admin/coaches'] = 'admin/Coaches';
$route['admin/coaches/create'] = 'admin/Coaches/create';
$route['admin/coaches/store'] = 'admin/Coaches/store';
$route['admin/coaches/edit/(:any)'] = 'admin/Coaches/edit/$1';
$route['admin/coaches/update/(:any)'] = 'admin/Coaches/update/$1';
$route['admin/coaches/change-status/(:any)'] = 'admin/Coaches/change_status/$1';

//create uses crud
$route['admin/observers'] = 'admin/Observers';
$route['admin/observers/create'] = 'admin/Observers/create';
$route['admin/observers/store'] = 'admin/Observers/store';
$route['admin/observers/edit/(:any)'] = 'admin/Observers/edit/$1';
$route['admin/observers/update/(:any)'] = 'admin/Observers/update/$1';
$route['admin/observers/change-status/(:any)'] = 'admin/Observers/change_status/$1';

//Students Crud
$route['admin/students'] = 'admin/Students';
$route['admin/students/create'] = 'admin/Students/create';
$route['admin/students/store'] = 'admin/Students/store';
$route['admin/students/edit/(:any)'] = 'admin/Students/edit/$1';
$route['admin/students/update/(:any)'] = 'admin/Students/update/$1';
$route['admin/students/change-status/(:any)'] = 'admin/Students/change_status/$1';

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
$route['admin/schools/get-region'] = 'admin/Schools/get_region';
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

//Students Crud
$route['admin/students'] = 'admin/Students';
$route['admin/students/create'] = 'admin/Students/create';
$route['admin/students/store'] = 'admin/Students/store';
$route['admin/students/edit/(:any)'] = 'admin/Students/edit/$1';
$route['admin/students/update/(:any)'] = 'admin/Students/update/$1';
$route['admin/students/change-status/(:any)'] = 'admin/Students/change_status/$1';

//Referees Crud
$route['admin/referees'] = 'admin/Referees';
$route['admin/referees/create'] = 'admin/Referees/create';
$route['admin/referees/store'] = 'admin/Referees/store';
$route['admin/referees/edit/(:any)'] = 'admin/Referees/edit/$1';
$route['admin/referees/update/(:any)'] = 'admin/Referees/update/$1';
$route['admin/referees/change-status/(:any)'] = 'admin/Referees/change_status/$1';

//Teams Crud
$route['admin/teams'] = 'admin/Teams';
$route['admin/teams/create'] = 'admin/Teams/create';
$route['admin/teams/get-students'] = 'admin/Teams/get_students';
$route['admin/teams/store'] = 'admin/Teams/store';
$route['admin/teams/edit/(:any)'] = 'admin/Teams/edit/$1';
$route['admin/teams/update/(:any)'] = 'admin/Teams/update/$1';
$route['admin/teams/change-status/(:any)'] = 'admin/Teams/change_status/$1';

//Teams Crud
$route['admin/games'] = 'admin/Games';
$route['admin/games/create'] = 'admin/Games/create';
$route['admin/games/create_costume'] = 'admin/Games/custom_game';
$route['admin/games/get-teams'] = 'admin/Games/get_teams';
$route['admin/games/store'] = 'admin/Games/store';
$route['admin/games/store_custom'] = 'admin/Games/store_custom';
$route['admin/games/change-status/(:any)'] = 'admin/Games/change_status/$1';

//Blog Crud
$route['admin/blog'] = 'admin/Blogs';
$route['admin/blog/create'] = 'admin/Blogs/create';
$route['admin/blog/store'] = 'admin/Blogs/store';
$route['admin/blog/edit/(:any)'] = 'admin/Blogs/edit/$1';
$route['admin/blog/show/(:any)'] = 'admin/Blogs/show/$1';
$route['admin/blog/update/(:any)'] = 'admin/Blogs/update/$1';
$route['admin/blog/change-status/(:any)'] = 'admin/Blogs/change_status/$1';
$route['admin/blog/change-image-status/(:any)'] = 'admin/Blogs/change_image_status/$1';
$route['admin/blog/edit-image/(:any)'] = 'admin/Blogs/edit_image/$1';
$route['admin/blog/update-image/(:any)'] = 'admin/Blogs/update_image/$1';

//Main Banner
$route['admin/banner'] = 'admin/MainBanner';
$route['admin/banner/store'] = 'admin/MainBanner/store';

//observed games check
$route['admin/check'] = 'admin/Checks';
$route['admin/check/show/(:any)'] = 'admin/Checks/show/$1';
$route['admin/check/save/(:any)'] = 'admin/Checks/save/$1';


//update all students date
$route['admin/students/date'] = 'admin/Update_date/index';
