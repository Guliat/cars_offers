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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/', 'HomeController@index')->name('dashboard');

// CUSTOMERS
Route::post('customers/search', 'CustomerController@search')->name('customers.search');
Route::Resource('customers', 'CustomerController');

// COMPANIES
Route::post('companies/search', 'CompanyController@search')->name('companies.search');
Route::Resource('companies', 'CompanyController');

// AUTOMOBILES
Route::get('automobiles/settings', 'Automobiles\AutomobilesController@settings')->name('automobiles.settings');
Route::Resource('automobiles','Automobiles\AutomobilesController');
Route::Resource('automobiles_brands','Automobiles\AutomobilesBrandsController');
Route::get('automobiles_models/{brand_id}/{model_id}', 'Automobiles\AutomobilesModelsController@show');
Route::Resource('automobiles_models','Automobiles\AutomobilesModelsController');
Route::Resource('automobiles_submodels','Automobiles\AutomobilesSubmodelsController');
Route::Resource('automobiles_services','Automobiles\AutomobilesServicesController');

// OFFERS
    // ADDING ITEMS TO OFFER
    Route::get('/offers/{offer}/add/sort/category/{category}', 'OffersController@sortByCategory');
    Route::get('/offers/{offer}/add', 'OffersController@addItem')->name('offers.addItem');

Route::post('/offers/storeitem', 'OffersController@storeItem')->name('offers.storeItem');
Route::Resource('offers', 'OffersController');
Route::Resource('offers_items', 'OffersItemsController');
Route::get('/offers_items/sort/category/{id}', 'OffersItemsController@sortByCategory')->name('offers.items.sort.category');
