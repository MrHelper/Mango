<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', [
	'as'   => 'index',
	'uses' => 'HomeController@ProdIndex'
	]);

Route::get('/about', [
	'as'   => 'about',
	'uses' => 'HomeController@about'
	]);

Route::get('/csmh', [
	'as'   => 'csmh',
	'uses' => 'HomeController@csmh'
	]);

Route::get('/contact', [
	'as'   => 'contact',
	'uses' => 'HomeController@contact'
	]);

Route::get('/product', [
	'as'   => 'products',
	'uses' => 'HomeController@products'
	]);

Route::get('/product/{id}', [
	'as'   => 'show.products',
	'uses' => 'HomeController@ShowProducts'
	]);

Route::get('/cat/{id}',[
	'as' => 'menu.show',
	'uses' => 'HomeController@MenuShow'
	]);

Route::get('/admincp', [
	'as'   => 'admincp.Menu',
	'uses' => 'AdminController@Menu'
	])->middleware('auth');

Route::get('/admincp/Menu', [
	'as'   => 'admincp.Menu',
	'uses' => 'AdminController@Menu'
	])->middleware('auth');

Route::get('/admincp/Product',[
	'as' => 'admincp.Product',
	'uses' => 'AdminController@Product'
	])->middleware('auth');

Route::post('/admincp/CProduct',[
	'as' => 'admincp.CreateProduct',
	'uses' => 'AdminController@ProductStore'
	])->middleware('auth');

Route::post('/admincp/EProduct',[
	'as' => 'admincp.EditProduct',
	'uses' => 'AdminController@ProductEdit'
	]);

Route::post('/admincp/DProduct',[
	'as' => 'admincp.DeleteProduct',
	'uses' => 'AdminController@ProductDelete'
	])->middleware('auth');

Route::post('/admincp/SProduct',[
	'as' => 'admincp.StarProduct',
	'uses' => 'AdminController@ProductStar'
	])->middleware('auth');

Route::post('/admincp/CMenu',[
	'as' => 'admincp.CreateMenu',
	'uses' => 'AdminController@MenuStore'
	])->middleware('auth');

Route::post('/admincp/DMenu',[
	'as' => 'admincp.DeleteMenu',
	'uses' => 'AdminController@MenuDelete'
	])->middleware('auth');

Route::post('/admincp/EMenu',[
	'as' => 'admincp.EditMenu',
	'uses' => 'AdminController@MenuEdit'
	])->middleware('auth');

Route::get('sendmail', 'SendMailController@contact');

 Auth::routes();
//Route::get('/login', 'Auth\LoginController@showLoginForm' );
//Route::post('/login', 'Auth\LoginController@login');
//Route::post('/logout', 'Auth\LoginController@logout');