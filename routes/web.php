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

Route::get('/', 'HomeController@index')->name('front-end.home');

Route::get('/khuon-cua', function() {
    return view('pages.product_detail');
})->name('front-end.khuon-cua');

Route::get('/cau-thang', function() {
    return view('pages.product_detail');
})->name('front-end.cau-thang');

Route::get('/nha-co-truyen', function() {
    return view('pages.product_detail');
})->name('front-end.nha-co-truyen');

Route::get('/dich-vu', function() {
    return view('pages.service');
})->name('front-end.dich-vu');

Route::get('/cong-trinh', function() {
    return view('pages.projects');
})->name('front-end.cong-trinh');

Route::get('/san-pham', function() {
    return view('pages.products');
})->name('front-end.san-pham');

Route::get('/chi-tiet-san-pham', function() {
    return view('pages.product_detail');
})->name('front-end.chi-tiet-san-pham');

Route::get('/kinh-nghiem', function() {
    return view('pages.blog');
})->name('front-end.kinh-nghiem');

Route::get('/chi-tiet-kinh-nghiem', function() {
    return view('pages.blog_detail');
})->name('front-end.chi-tiet-kinh-nghiem');

Route::get('/chi-tiet-cong-trinh', function() {
    return view('pages.project_detail');
})->name('front-end.chi-tiet-cong-trinh');

Route::get('/quan-ao', function() {
    return view('pages.product_detail');
})->name('front-end.quan-ao');

Route::get('/tu-bep', function() {
    return view('pages.product_detail');
})->name('front-end.tu-bep');

Route::get('/giuong-ngu', function() {
    return view('pages.product_detail');
})->name('front-end.giuong-ngu');

Route::get('/ban-an', function() {
    return view('pages.product_detail');
})->name('front-end.ban-an');

Route::get('/trang-tri', function() {
    return view('pages.product_detail');
})->name('front-end.trang-tri');

Route::get('/gioi-thieu', function() {
	return view('pages.about');
})->name('front-end.gioi-thieu');

Route::get('/lien-he', function() {
	return view('pages.contact');
})->name('front-end.lien-he');

Route::resource('/demotext', 'DemoController');

Auth::routes();

Route::group([
    'middleware' => 'auth', 
    'prefix' => 'adm'
], function() {

    // Dashboard
    Route::get('/', function() {
        return view('adm.layout');
    });

});