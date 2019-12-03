<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('brand/custom/limit/{limit}', 'Api\Vehicles\BrandCustomQueryController@limit_query');
Route::apiResource('category', 'Api\Vehicles\VehicleCategoryController');
Route::apiResource('vehicle-model', 'Api\Vehicles\VehicleModelController');
Route::apiResource('vehicle-sub-model', 'Api\Vehicles\VehicleSubModelController');
Route::apiResource('brand', 'Api\Vehicles\BrandController');
Route::apiResource('image', 'Api\ImageController');
Route::apiResource('country', 'Api\Ubications\CountryController');
Route::apiResource('city', 'Api\Ubications\CityController');
Route::apiResource('state', 'Api\Ubications\StateController');
Route::apiResource('neighborhood', 'Api\Ubications\NeighborhoodController');
Route::apiResource('product', 'Api\ProductController');
Route::apiResource('extras', 'Api\ExtraController');
Route::apiResource('conditions', 'Api\ConditionController');
Route::apiResource('price-conditions', 'Api\PriceConditionController');
Route::apiResource('tariff', 'Api\TariffController');
Route::apiResource('currency', 'Api\CurrencyController');
Route::apiResource('product', 'Api\ProductController');
Route::apiResource('attributes', 'Api\AttributeController');
Route::apiResource('user', 'Api\UserController');
Route::post('search', 'Api\SearchProductController@search');
Route::post('guia-precios', 'Api\GuiaPrecioController@precios_chart');
