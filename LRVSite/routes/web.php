<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/companyprofilepage', function () {
    return view('companyprofilepage');
});

Route::get('/aboutceo/{name}/{city}', function ($name, $city) {
    return view('aboutceo')->with('name', $name)->with('city', $city);
});

// testingcontroller - webpage name
// App/Http/Controllers/LeonController - directory with capital A
// @callfire - controller function name
Route::get('testingcontroller', 'App\Http\Controllers\LeonController@callfile');

Route::get('testingcontrollerpage2', 'App\Http\Controllers\LeonController@callfile2');
