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
    // return view('welcome');
    return view('pages.home');
})->name('home');

Route::get('/khuon-cua', function() {
    
})->name('khuon-cua');

Route::get('/cau-thang', function() {
    
})->name('cau-thang');

Route::get('/nha-co-truyen', function() {
    
})->name('nha-co-truyen');

Route::get('/quan-ao', function() {
    
})->name('quan-ao');

Route::get('/tu-bep', function() {
    
})->name('tu-bep');

Route::get('/giuong-ngu', function() {
    
})->name('giuong-ngu');

Route::get('/ban-an', function() {
    
})->name('ban-an');

Route::get('/trang-tri', function() {
    
})->name('trang-tri');

Route::get('/gioi-thieu', function() {
    
})->name('gioi-thieu');

Route::get('/lien-he', function() {
    
})->name('lien-he');

