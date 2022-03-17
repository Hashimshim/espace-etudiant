<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DeleguePostController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\AnnonceController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return view('welcome');
});
//Post display 
Route::get('creerpost', 'App\Http\Controllers\DeleguePostController@create');
Route::post('creerpost', 'App\Http\Controllers\DeleguePostController@store');
Route::get('post','App\Http\Controllers\DeleguePostController@index' );
Route::get('postdashboard','App\Http\Controllers\DeleguePostController@dashboard');
//DeleguePost update delete 
Route::get('deletepost/{id}','App\Http\Controllers\DeleguePostController@delete');
Route::get('modifierpost/{id}','App\Http\Controllers\DeleguePostController@edit');
Route::put('updatepost/{id}','App\Http\Controllers\DeleguePostController@update');

//get document insertion page and save new demande document
Route::get('document','App\Http\Controllers\DocumentController@create');
Route::post('document','App\Http\Controllers\DocumentController@store');

//Display annonces
Route::get('annonce','App\Http\Controllers\AnnonceController@index');
Route::get('annonce/{id}','App\Http\Controllers\AnnonceController@edit');

