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
$route['default_controller'] = 'welcome';
$route['bisnis'] = 'welcome/bisnis';
$route['bisnis/keranjang'] = 'welcome/keranjang';
$route['bisnis/keranjang/metode'] = 'welcome/metode';
$route['bisnis/keranjang/metode/bayar'] = 'welcome/bayar';
$route['bisnis/keranjang/metode/bayar_e'] = 'welcome/bayar_e';
$route['bisnis/detail'] = 'welcome/detail';
$route['bisnis/detail/ke_keranjang'] = 'welcome/ke_keranjang';
$route['edukasi'] = 'welcome/edu';
$route['edukasi/artikel'] = 'welcome/artikel';
$route['edukasi/form_art'] = 'welcome/form_art';
$route['suplier'] = 'suplier_con';
$route['suplier/tambah'] = 'suplier_con/tambah';
$route['admin'] = 'admin_con';
$route['admin/form_adm'] = 'admin_con/form_adm';
$route['admin/form_sup'] = 'admin_con/form_sup';
$route['admin/artikel_ad'] = 'admin_con/artikel_ad';
$route['admin/tambah_art'] = 'admin_con/tambah_art';
$route['admin/transaksi_ad'] = 'admin_con/transaksi_ad';
$route['admin/katbrg_ad'] = 'admin_con/katbrg_ad';
$route['admin/katart_ad'] = 'admin_con/katart_ad';
$route['admin/penyuluh_ad'] = 'admin_con/penyuluh_ad';
$route['admin/perpeny_ad'] = 'admin_con/perpeny_ad';
$route['admin/perditer_ad'] = 'admin_con/perditer_ad';
$route['admin/form_peny'] = 'admin_con/form_peny';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


























