<?php

use Illuminate\Support\Facades\Route;

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

//ROtta home Page
Route::get('/', function () {
    
    //passo l'array comics alla home page  
    $comics = config('db.comics');
    return view('home', compact('comics'));

});
