<?php

use Illuminate\Support\Facades\Route;
use App\Mail\sampleMail;
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
    return view('index');
});


// Route::get('/hello/{name}', function($name){

//     return view('new', compact('name'));
// });

// Route::resource('/doctor', 'DoctorController');

Route::view('/new', 'new');

Route::get('/mail', function(){

    return new sampleMail();
});





// Route::post('/item/api', 'ItemsController@store');
// Route::put('/item/api/update/{id}', 'ItemsController@update');
// Route::delete('/item/api/delete/{id}', 'ItemsController@delete');
// Route::get('/item', 'ItemsController@index');


Route::group(['prefix' => 'api'], function()
{
    Route::resource('/item', 'ItemsController');
});