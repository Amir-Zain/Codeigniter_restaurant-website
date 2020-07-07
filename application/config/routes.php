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
$route['default_controller'] = 'Indexcntrl';

$route['About']='Aboutcntrl';
$route['Menu']='Menucntrl';
$route['Blog']='Blogcntrl';
$route['Contact']='Contactcntrl';
$route['Reservation']='Reservationcntrl';
$route['Login']='Logincntrl';
$route['Signup']='Signupcntrl';
$route['Home']='front/Homecntrl';
$route['Fmenu']='front/Fmenucntrl';
$route['Fabout']='front/Faboutcntrl';
$route['Fblog']='front/Fblogcntrl';
$route['Fcontact']='front/Fcontactcntrl';
$route['Freservation']='front/Freservationcntrl';
$route['Admin']='backend/Alogincntrl';
$route['Bhome']='backend/Ahomecntrl';
$route['Addtable']='backend/Addtablecntrl';
$route['Addtime']='backend/Addtimecntrl';
$route['Addmenu']='backend/Addmenucntrl';
$route['Breservations']='backend/Areservationscntrl';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
