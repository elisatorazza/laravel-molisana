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

Route::get('/', function () {
    return view('home');

})->name('home');

Route::get('/prodotti', function () {
    
    $data = config('db_pasta');

    $paste = [];

    foreach ($data as $key => $value) {
        $value["id"] = $key;
        $paste[$value["tipo"]][]=$value;
    }

    return view('pages.prodotti',  ["db" => $paste]);
    
})->name('products');

Route::get('/news', function () {
    return view('pages.news');
})->name('news');


