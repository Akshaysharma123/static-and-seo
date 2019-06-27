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
    return view('home.index');
})->name('home');
Route::get('/about', function () {
    return view('about.about_us');
})->name('about');
Route::get('/services', function () {
    return view('services.services');
})->name('services');
Route::get('/contact', function () {
    return view('contact.contact');
})->name('contact');
/* vancancies */
Route::get('/vacancies', function () {
    return view('career.vacancies');
})->name('vacancies');
Route::get('/web-developer', function () {
    return view('career.web-developer');
})->name('web-developer');
Route::get('/android-developer', function () {
    return view('career.android-developer');
})->name('android-developer');
Route::get('/ios-developer', function () {
    return view('career.ios-developer');
})->name('ios-developer');
/* -------------- */
/* send resume */
Route::get('/send-your-resume', function () {
    return view('career.send_resume');
})->name('send_resume');
Route::post('/career/send-your-resume', 'Controller@postResume')->name('send_resume.post');
/* ------- */
/* ------- contact us ------- */
Route::post('/contact_us', 'Controller@contact_us')->name('contact_us');
/* ----- */
/* products */
Route::get('/products', function () {
    return view('products.products');
})->name('products');
Route::get('/products/1/view', function () {
    return view('products.product-view-1');
})->name('product1');
Route::get('/products/2/view', function () {
    return view('products.product-view-2');
})->name('product2');
Route::get('/products/3/view', function () {
    return view('products.product-view-3');
})->name('product3');
/* --------------------- */
Route::get('/portfolio', function () {
    return view('portfolio.portfolio');
})->name('portfolio');
/* quote */
Route::get('/get-quote', function () {
    return view('quote.quote');
})->name('quote');
Route::post('/get-quote', 'Controller@requestQuote')->name('request.quote');
/* ----- */
/* --------subscribe---- */
Route::post('/subscribe', 'Controller@postSubscriber')->name('subscribe_us');
/* ------------- */
/* services */
Route::get('/mobile-app-services', function () {
    return view('services.mobile-app-services');
})->name('mobile-app-services');
Route::get('/cloud-based-services', function () {
    return view('services.cloud-based-services');
})->name('cloud-based-services');
Route::get('/web-development-services', function () {
    return view('services.web-development-services');
})->name('web-development-services');

Route::get('/video-on-demand-services', function () {
    return view('services.video-on-demand-services');
})->name('video-on-demand-services');

Route::get('/crm-softwares-development-services', function () {
    return view('services.crm-softwares-development-services');
})->name('crm-softwares-development-services');

Route::get('/e-commerce-services', function () {
    return view('services.e-commerce-services');
})->name('e-commerce-services');

Route::get('/html5-development-services', function () {
    return view('services.html5-development-services');
})->name('html5-development-services');
Route::get('/fintech-solution-services', function () {
    return view('services.fintech-solution-services');
})->name('fintech-solution-services');
/* -------- */
/* portfolio links */
//1
Route::get('/portfolio/1/view/', function () {
    return view('portfolio.1');
})->name('portfolio1');
//2
Route::get('/portfolio/2/view/', function () {
    return view('portfolio.2');
})->name('portfolio2');
//3
Route::get('/portfolio/3/view/', function () {
    return view('portfolio.3');
})->name('portfolio3');
//4
Route::get('/portfolio/4/view/', function () {
    return view('portfolio.4');
})->name('portfolio4');
//5
Route::get('/portfolio/5/view/', function () {
    return view('portfolio.5');
})->name('portfolio5');
//6
Route::get('/portfolio/6/view/', function () {
    return view('portfolio.6');
})->name('portfolio6');
//7
Route::get('/portfolio/7/view/', function () {
    return view('portfolio.7');
})->name('portfolio7');
//8
Route::get('/portfolio/8/view/', function () {
    return view('portfolio.8');
})->name('portfolio8');
//9
Route::get('/portfolio/9/view/', function () {
    return view('portfolio.9');
})->name('portfolio9');
//10
Route::get('/portfolio/10/view/', function () {
    return view('portfolio.10');
})->name('portfolio10');
//11
Route::get('/portfolio/11/view/', function () {
    return view('portfolio.11');
})->name('portfolio11');
//12
Route::get('/portfolio/12/view/', function () {
    return view('portfolio.12');
})->name('portfolio12');
//13
Route::get('/portfolio/13/view/', function () {
    return view('portfolio.13');
})->name('portfolio13');
//14
Route::get('/portfolio/14/view/', function () {
    return view('portfolio.14');
})->name('portfolio14');
//15
Route::get('/portfolio/15/view/', function () {
    return view('portfolio.15');
})->name('portfolio15');
//16
Route::get('/portfolio/16/view/', function () {
    return view('portfolio.16');
})->name('portfolio16');
//17
Route::get('/portfolio/17/view/', function () {
    return view('portfolio.17');
})->name('portfolio17');
//18
Route::get('/portfolio/18/view/', function () {
    return view('portfolio.18');
})->name('portfolio18');
//19
Route::get('/portfolio/19/view/', function () {
    return view('portfolio.19');
})->name('portfolio19');
//20
Route::get('/portfolio/20/view/', function () {
    return view('portfolio.20');
})->name('portfolio20');
//21
Route::get('/portfolio/21/view/', function () {
    return view('portfolio.21');
})->name('portfolio21');
//22
Route::get('/portfolio/22/view/', function () {
    return view('portfolio.22');
})->name('portfolio22');
//23
Route::get('/portfolio/23/view/', function () {
    return view('portfolio.23');
})->name('portfolio23');
//24
Route::get('/portfolio/24/view/', function () {
    return view('portfolio.24');
})->name('portfolio24');
/* -------------- */


