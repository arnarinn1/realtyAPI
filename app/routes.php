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

Route::get('/', function()
{
	return View::make('hello');
});


/*
|--------------------------------------------------------------------------
| Type Item Routes
|--------------------------------------------------------------------------
*/

Route::get('type_item/', 'TypeItemController@QueryTypeItems');
Route::get('type_item/{typeItem}', 'TypeItemController@QueryTypeItem');


/*
|--------------------------------------------------------------------------
| Realty Routes
|--------------------------------------------------------------------------
*/

Route::get('realty/', 'RealtyController@QueryRealties');
Route::get('realty/{realtyid}', 'RealtyController@QueryRealty');
Route::post('realty/', 'RealtyController@SaveRealty');
Route::delete('realty/{id}', 'RealtyController@DeleteRealty');


/*
|--------------------------------------------------------------------------
| Realty Code Routes
|--------------------------------------------------------------------------
*/

Route::get('realty_code/', 'RealtyCodeController@QueryRealtyCodes');
Route::get('realty_code/{realtyCodeId}', 'RealtyCodeController@QueryRealtyCode');
Route::post('realty_code/', 'RealtyCodeController@SaveRealtyCode');
Route::delete('realty_code/{id}', 'RealtyCodeController@DeleteRealtyCode');


/*
|--------------------------------------------------------------------------
| Realtor Routes
|--------------------------------------------------------------------------
*/

Route::get('realtor/', 'RealtorController@QueryRealtors');
Route::get('realtor/{realtorId}', 'RealtorController@QueryRealtor');


/*
|--------------------------------------------------------------------------
| Realty Image Routes
|--------------------------------------------------------------------------
*/

Route::get('realty_image/', 'RealtyImageController@QueryRealtyImages');
Route::get('realty_image/{realtyImageId}', 'RealtyImageController@QueryRealtyImage');


/*
|--------------------------------------------------------------------------
| Realty Properties Routes
|--------------------------------------------------------------------------
*/

Route::get('realty_property/', 'RealtyPropertyController@QueryRealtyProperties');
Route::get('realty_property/{propertyId}', 'RealtyPropertyController@QueryRealtyProperty');

