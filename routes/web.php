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
    return view('pages.product_detail');
})->name('khuon-cua');

Route::get('/cau-thang', function() {
    return view('pages.product_detail');
})->name('cau-thang');

Route::get('/nha-co-truyen', function() {
    return view('pages.product_detail');
})->name('nha-co-truyen');

Route::get('/dich-vu', function() {
    return view('pages.service');
})->name('dich-vu');

Route::get('/cong-trinh', function() {
    return view('pages.projects');
})->name('cong-trinh');

Route::get('/san-pham', function() {
    return view('pages.products');
})->name('san-pham');

Route::get('/chi-tiet-san-pham', function() {
    return view('pages.product_detail');
})->name('chi-tiet-san-pham');

Route::get('/goc-chia-se', function() {
    return view('pages.blog');
})->name('goc-chia-se');

Route::get('/chi-tiet-goc-chia-se', function() {
    return view('pages.blog_detail');
})->name('chi-tiet-goc-chia-se');

Route::get('/chi-tiet-cong-trinh', function() {
    return view('pages.project_detail');
})->name('chi-tiet-cong-trinh');

Route::get('/quan-ao', function() {
    return view('pages.product_detail');
})->name('quan-ao');

Route::get('/tu-bep', function() {
    return view('pages.product_detail');
})->name('tu-bep');

Route::get('/giuong-ngu', function() {
    return view('pages.product_detail');
})->name('giuong-ngu');

Route::get('/ban-an', function() {
    return view('pages.product_detail');
})->name('ban-an');

Route::get('/trang-tri', function() {
    return view('pages.product_detail');
})->name('trang-tri');

Route::get('/gioi-thieu', function() {
	return view('pages.about');
})->name('gioi-thieu');

Route::get('/lien-he', function() {
	return view('pages.contact');
})->name('lien-he');

Auth::routes();

Route::get('/admin', function() {
    echo "admin page";
})->middleware('auth');

// Route::get('/home', 'HomeController@index')->name('home');
