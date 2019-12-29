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
$route['default_controller'] = 'login';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// menu kependudukan
// kependudukan
$route['kependudukan/kependudukan(/:any)?'] = 'kependudukan$1';
$route['kependudukan/kependudukan/(:any)/(:num)'] = 'kependudukan/$1/$2';
// kartukeluarga
$route['kependudukan/kartukeluarga(/:any)?'] = 'kartukeluarga$1';
$route['kependudukan/kartukeluarga/(:any)/(:num)'] = 'kartukeluarga/$1/$2';
// kelahiran
$route['kependudukan/kelahiran(/:any)?'] = 'kelahiran$1';
$route['kependudukan/kelahiran/(:any)/(:num)'] = 'kelahiran/$1/$2';
// kematian
$route['kependudukan/kematian(/:any)?'] = 'kematian$1';
$route['kependudukan/kematian/(:any)/(:num)'] = 'kematian/$1/$2';
// pendudukmasuk
$route['kependudukan/pendudukmasuk(/:any)?'] = 'pendudukmasuk$1';
$route['kependudukan/pendudukmasuk/(:any)/(:num)'] = 'pendudukmasuk/$1/$2';
// pendudukkeluar
$route['kependudukan/pendudukkeluar(/:any)?'] = 'pendudukkeluar$1';
$route['kependudukan/pendudukkeluar/(:any)/(:num)'] = 'pendudukkeluar/$1/$2';

// menu referensi
// pendidikan
$route['referensi/pendidikan(/:any)?'] = 'pendidikan$1';
$route['referensi/pendidikan/(:any)/(:num)'] = 'pendidikan/$1/$2';
// pekerjaan
$route['referensi/pekerjaan(/:any)?'] = 'pekerjaan$1';
$route['referensi/pekerjaan/(:any)/(:num)'] = 'pekerjaan/$1/$2';
// agama
$route['referensi/agama(/:any)?'] = 'agama$1';
$route['referensi/agama/(:any)/(:num)'] = 'agama/$1/$2';
// lingkungan
$route['referensi/lingkungan(/:any)?'] = 'lingkungan$1';
$route['referensi/lingkungan/(:any)/(:num)'] = 'lingkungan/$1/$2';
// penandatangan
$route['referensi/penandatangan(/:any)?'] = 'penandatangan$1';
$route['referensi/penandatangan/(:any)/(:num)'] = 'penandatangan/$1/$2';

// menu pengaturan
// user
$route['pengaturan/user(/:any)?'] = 'user$1';
$route['pengaturan/user/(:any)/(:num)'] = 'user/$1/$2';

// profile
$route['pengaturan/profile(/:any)?'] = 'profile$1';
$route['pengaturan/profile/(:any)/(:num)'] = 'profile/$1/$2';