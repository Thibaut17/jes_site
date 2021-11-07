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
View::composer('*', function($view){
    View::share('view_name', $view->getName());
});
Route::get('/', function () {

    return view('home');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/equipe', function () {
    return view('equipe');
});
Route::get('/actualites', function () {
    return view('actualites');
});
Route::get('/actualite', function () {
    return view('actualite');
});
Route::get('/sitemap', function () {
    return view('sitemap');
});
Route::get('/legal', function () {
    return view('legal');
});
Route::get('/confidentialite', function () {
    return view('confidentialite');
});
Route::get('/services/informatique', function () {
    return view('services/informatique');
});
Route::get('/services', function () {
    return view('services/index');
});
Route::get('/services/sysnum', function () {
    return view('services/sysnum');
});
Route::get('/services/photonique', function () {
    return view('services/photonique');
});
Route::fallback(function() {
    return view('404'); // la vue 404.blade.php
});
