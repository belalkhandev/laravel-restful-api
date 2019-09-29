<?php

use Illuminate\Http\Request;
use App\Country;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('country', 'CountryController@country');
Route::get('country/{country_id}', 'CountryController@countryId');
// create
Route::post('country', 'CountryController@storeCountry');
//edit
Route::put('country/{country_id}', 'CountryController@updateCountry');
