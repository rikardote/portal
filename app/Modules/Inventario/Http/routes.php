<?php
//Route::get('home','HomeController@index');
/*
|--------------------------------------------------------------------------
| Module Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for the module.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::group(['prefix' => 'inventario'], function() {
	Route::group(['middleware' => 'web'], function () {
	   
		Route::get('/', 'IpsController@index');
		//Route::resource('ip', 'IpsController');
		Route::get('ip/{ip}', [
	        'uses' => 'IpsController@create',
	        'as' => 'inventario.ip.create'
    	]);
    	Route::get('ip/{ip}/edit', [
	        'uses' => 'IpsController@edit',
	        'as' => 'inventario.ip.edit'
    	]);
    	Route::put('ip/{id}/update', [
	        'uses' => 'IpsController@update',
	        'as' => 'inventario.ip.update'
   		 ]);
    	Route::get('ip/{id}', [
	        'uses' => 'IpsController@store',
	        'as' => 'inventario.ip.store'
   		 ]);
    	Route::get('ip/{id}/destroy', [
	        'uses' => 'IpsController@destroy',
	        'as' => 'inventario.ip.destroy'
   		 ]);
    	/*Route::get('/{ip}/edit', [
	        'uses' => 'IpsController@edit',
	        'as' => 'admin.ip.edit'
    	]);
    	Route::post('/', [
	        'uses' => 'IpsController@store',
	        'as' => 'admin.ip.store'
    	]);
    	*/
	});
});