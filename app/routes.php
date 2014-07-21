<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

//Route::get('/', function()
//{
//	return View::make('hello');
//});
//Route::get('covi','App\\Controllers\\HomeController@nescafe');
//Route::get('maik','App\\Controllers\\Sadam@husen');
//Route::get('AddressList','App\\Controllers\\AddressListController@getAll');
//Route::get('/','App\\Controllers\\HomeController@index');
//Route::get('/getall', 'App\\Controllers\\HomeController@getAll');
//Route::get('/ipaddress', 'App\\Controllers\\HomeController@ipaddress');
//Route::post('form/add','App\\Controllers\\HomeController@add');

#Firewall
//AddressList
//Route::get('AddressList','App\\Controllers\\AddressList@getAll');
//Route::get('AddressList','App\\Controllers\\AddressList@add');
//Route::get('AddressList','App\\Controllers\\AddressList@delete');
//Route::get('AddressList','App\\Controllers\\AddressList@disable');
//Route::get('AddressList','App\\Controllers\\AddressList@enable');
//Route::get('AddressList','App\\Controllers\\AddressList@detail');
//Route::get('AddressList','App\\Controllers\\AddressList@set');
//

//Filter
//Route::get('Filter','App\\Controllers\\Filter@getAll');
//Route::get('Filter','App\\Controllers\\Filter@delete');
//Route::get('Filter','App\\Controllers\\Filter@disable');
//Route::get('Filter','App\\Controllers\\Filter@enable');
//Route::get('Filter','App\\Controllers\\Filter@detail');

//Route::get('Connection','App\\Controllers\\Connection@getAll');
//Route::get('Connection','App\\Controllers\\Connection@delete');

#hotspot
//Route::get('huser','App\\Controllers\\HotspotUser@getAll');
//Route::get('huser','App\\Controllers\\HotspotUser@add');
//Route::get('huser','App\\Controllers\\HotspotUser@detail');
//Route::get('huser','App\\Controllers\\HotspotUser@enable');
//Route::get('huser','App\\Controllers\\HotspotUser@disable');
//Route::get('huser','App\\Controllers\\HotspotUser@set');
//Route::get('huser','App\\Controllers\\HotspotUser@resetCounter');
//
//
//
//Route::get('Address','App\\Controllers\\IPAddress@getAll');
//Route::get('Address','App\\Controllers\\Address@add');
//Route::get('Address','App\\Controllers\\Address@delete');
//Route::get('Address','App\\Controllers\\Address@enable');
//Route::get('Address','App\\Controllers\\Address@disable');
//Route::get('Address','App\\Controllers\\Address@detail_Address');
//Route::get('Address','App\\Controllers\\set');




//IPaddress
Route::get('ipaddr/ipaddr','App\\Controllers\\IPAddress@getAll');

Route::get('ipaddr/addipaddr','App\\Controllers\\IPAddress@add');
Route::post('ipaddr/addipaddr','App\\Controllers\\IPAddress@add');

Route::post('ipaddr/updateipaddr/{id}','App\\Controllers\\IPAddress@set');
Route::get('ipaddr/updateipaddr/{id}','App\\Controllers\\IPAddress@set');

Route::get('ipaddr/deleteipaddr/{id}','App\\Controllers\\IPAddress@delete');

Route::get('ipaddr/disableipaddr/{id}','App\\Controllers\\IPAddress@disable');

Route::get('ipaddr/enableipaddr/{id}','App\\Controllers\\IPAddress@enable');

Route::get('ipaddr/detailipaddr/{id}','App\\Controllers\\IPAddress@detail_address');




//Firewall Address List
Route::get('ipaddr','App\\Controllers\\Firewall@getAll');

Route::get('ipaddr/deletelist/{id}', 'App\\Controllers\\Firewall@delete');

Route::get('ipaddr/detaillist/{id}','App\\Controllers\\Firewall@detail');

Route::get('ipaddr/enablelist/{id}','App\\Controllers\\Firewall@enable');

Route::get('ipaddr/disablelist/{id}','App\\Controllers\\Firewall@disable');


//Firewall Filter
Route::get('ipaddr/filter','App\\Controllers\\Filter@getAll');

Route::post('ipaddr/addfilter','App\\Controllers\\Filter@add');
Route::get('ipaddr/addfilter','App\\Controllers\\Filter@add');

Route::post('ipaddr/setfilter/{id}','App\\Controllers\\Filter@set');
Route::get('ipaddr/setfilter/{id}','App\\Controllers\\Filter@set');

Route::get('ipaddr/deletefilter/{id}','App\\Controllers\\Filter@delete');

Route::get('ipaddr/disablefilter/{id}','App\\Controllers\\Filter@disable');

Route::get('ipaddr/enablefilter/{id}','App\\Controllers\\Filter@enable');

Route::get('ipaddr/detailfilter/{id}','App\\Controllers\\Filter@detail');

//hotspot Active
Route::get('active', 'App\\Controllers\\ActiveController@getAll');

Route::get('active/deleteactive/{id}' , 'App\\Controller\\ActiveController@delete');

Route::get('active/detailactive/{id}' , 'App\\Controller\\ActiveController@detail');

//database
//rules
Route::get('rules', 'App\\Controllers\\RulesController@index');

Route::get('rules/add','App\\Controllers\\RulesController@add');

Route::post('rules/store','App\\Controllers\\RulesController@store');

Route::get('rules/edit/{id}','App\\Controllers\\RulesController@edit');
Route::post('rules/update/{id}','App\\Controllers\\RulesController@update');

Route::get('rules/detail/{id}','App\\Controllers\RulesController@detail');

Route::get('rules/delete/{id}','App\\Controllers\RulesController@delete');


//login
Route::get('/login', 'App\\Controllers\\LoginController@index');

Route::post('/login/proses', 'App\\Controllers\\LoginController@prosesLogin');

Route::get('/login/logout', 'App\\Controllers\\LoginController@doLogout');

Route::get('/users/delete/{id}', 'App\\Controllers\\UserController@userDelete');

Route::get('/users', 'App\\Controllers\\UserController@index');

Route::get('/users/add', 'App\\Controllers\\UserController@userAdd');

Route::get('/users/edit/{id}', 'App\\Controllers\\UserController@userEdit');

Route::post('/users/update/{id}', 'App\\Controllers\\UserController@prosesUpdate');

Route::get('/users/', 'App\\Controllers\\UserController@userView');

Route::post('/users/proses_add', 'App\\Controllers\\UserController@prosesAdd');

//Add New Mikrotik
Route::get('/mikrotik/', 'App\\Controllers\\MikrotikController@index');

Route::get('/mikrotik/delete/{id}', 'App\\Controllers\\MikrotikController@delete');

Route::get('mikrotik/detail/{id}','App\\Controllers\MikrotikController@detail');

Route::get('mikrotik/add','App\\Controllers\\MikrotikController@add');

Route::post('mikrotik/store','App\\Controllers\\MikrotikController@store');

//Route::get('/test','App\\Controllers\\TestController@index');



//tutorial

//Route::resource('bands',  'BandController');


#test#

Route::get('/adminitrator/home', 'App\\Controllers\\AdminitratorController@index');