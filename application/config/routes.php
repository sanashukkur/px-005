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
$route['admin'] = 'Admin_Controller/settings_form';
$route['login']='Admin_Controller/login_form';
$route['login-admin']='Admin_Controller/adminlogin';
$route['logout']='Admin_Controller/logout';
$route['clear-session_Admin']='Admin_Controller/SessionClear';  
$route['default_controller'] = 'User_Controller';

$route['admin-settings'] = 'Admin_Controller/settings_form';
$route['add-settings'] = 'Admin_Controller/add_settings';
$route['show-banner'] = 'Admin_Controller/banner_form';
// $route['store-image'] = 'Admin_Controller/store';
// $route['store-img'] = 'Admin_Controller/store_img';
//banner
$route['add-banner-title'] = 'Admin_Controller/add_banner';
$route['update-banner'] = 'Admin_Controller/update';
//banner4

$route['add-banner-content'] = 'Admin_Controller/add_banner4';
$route['show-banner-details'] = 'Admin_Controller/banner4_form';
$route['insert-banner-data'] = 'Admin_Controller/insert_banner4';
$route['update-banner-data'] = 'Admin_Controller/update_banner4_data';
$route['update-banner-content'] = 'Admin_Controller/update_banner4_content';

$route['update-data'] = 'Admin_Controller/update_data';

$route['update-banner-title'] = 'Admin_Controller/update_banner';
$route['update-logo'] = 'Admin_Controller/updatelogo';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['contact-form'] = 'User_Controller/contact';
$route['about-form'] = 'User_Controller/about';
$route['gallery-form'] = 'User_Controller/gallery';
$route['service-form'] = 'User_Controller/service';

$route['user_controller'] = 'User_Controller';
$route['contactform'] = 'User_Controller/contact_form';
//service user 
$route['service/(:any)']='User_Controller/service/$1';
$route['admin-settings'] = 'Admin_Controller/settings_form';
$route['add-settings'] = 'Admin_Controller/add_settings';

$route['update-banner'] = 'Admin_Controller/update';
$route['update-data'] = 'Admin_Controller/update_data';


$route['add-banner-title'] = 'Admin_Controller/add_banner';
$route['show-banner'] = 'Admin_Controller/banner_form';
$route['update-banner-title'] = 'Admin_Controller/update_banner';
$route['update-banner-company'] = 'Admin_Controller/add_welcomebanner';
$route['add-banner-company'] = 'Admin_Controller/welcomebanner_form';
$route['add-banner2'] = 'Admin_Controller/add_banner2';
$route['view-banner2'] = 'Admin_Controller/banner2_form';
$route['update-banner2'] = 'Admin_Controller/update_banner2';
$route['add-banner3'] = 'Admin_Controller/add_banner3';
$route['view-banner3'] = 'Admin_Controller/banner3_form';
$route['update-banner3'] = 'Admin_Controller/update_banner3';
$route['add-banner-content'] = 'Admin_Controller/add_banner4';
$route['show-banner-details'] = 'Admin_Controller/banner4_form';
$route['insert-banner-data'] = 'Admin_Controller/insert_banner4';
$route['update-banner-data'] = 'Admin_Controller/update_banner4_data';
$route['update-banner-content'] = 'Admin_Controller/update_banner4_content';
$route['add-banner5'] = 'Admin_Controller/add_banner5';
$route['view-banner5'] = 'Admin_Controller/view_banner5';
$route['update-banner5'] = 'Admin_Controller/update_banner5';


$route['add-banner6'] = 'Admin_Controller/add_banner6';
$route['view-banner6'] = 'Admin_Controller/view_banner6';
$route['show-banner6'] = 'Admin_Controller/show_banner6';
$route['view-update-logo'] = 'Admin_Controller/updatebanner6';
$route['update-logo'] = 'Admin_Controller/update_logo6';

$route['add-contact'] = 'Admin_Controller/add_contact';
$route['view-contact'] = 'Admin_Controller/view_contact';
$route['update-contact'] = 'Admin_Controller/update_contact';
$route['add-map'] = 'Admin_Controller/view_map';
$route['insert-map'] = 'Admin_Controller/add_mapurl';
$route['show-map'] = 'Admin_Controller/show_map';
$route['update-map'] = 'Admin_Controller/update_map';
$route['view-about'] = 'Admin_Controller/view_aboutfooter';
$route['add-about'] = 'Admin_Controller/add_aboutfooter';
$route['show-about'] = 'Admin_Controller/show_aboutfooter';
$route['update-about'] = 'Admin_Controller/update_aboutfooter';
//works
$route['view-works'] = 'Admin_Controller/view_worksform';
$route['add-works'] = 'Admin_Controller/add_worksform';
$route['fetch-works'] = 'Admin_Controller/fetch_workform';
$route['viewall-works'] = 'Admin_Controller/show_workform';
$route['update-works'] = 'Admin_Controller/update_works';
//team content
$route['service/any'] = 'Admin_Controller/services/$1';

$route['view-teamcontent'] = 'Admin_Controller/view_teamcontentform';
$route['add-team'] = 'Admin_Controller/add_teamform';

$route['viewall-teams'] = 'Admin_Controller/view_teams';
$route['fetch-team'] = 'Admin_Controller/fetch_team';
$route['update-team'] = 'Admin_Controller/updateteam';
//team
$route['insert-team'] = 'Admin_Controller/insert_team';
$route['insert-team-data'] = 'Admin_Controller/insert_team_data';
$route['view-team'] = 'Admin_Controller/view_team';
$route['fetch-all-team'] = 'Admin_Controller/fetchallteam';
$route['update-team-data'] = 'Admin_Controller/update_team_data';
//admin service 
$route['insert-service'] = 'Admin_Controller/insert_service';
$route['insert-services-data'] = 'Admin_Controller/insert_services_data';
$route['view-services'] = 'Admin_Controller/view_services';
$route['fetch-service'] = 'Admin_Controller/fetch_service';
$route['update-service-data'] = 'Admin_Controller/update_service_data';
//admin gallery
$route['insert-gallery'] = 'Admin_Controller/insert_gallery';
$route['insert-gallery-data'] = 'Admin_Controller/insert_gallery_data';
$route['view-gallery'] = 'Admin_Controller/view_gallery';
$route['fetch-gallery'] = 'Admin_Controller/fetch_gallery';
$route['update-gallery-data'] = 'Admin_Controller/update_gallery_data';
