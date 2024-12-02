<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagingController;
use App\Http\Controllers\SiteController;
// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/page', [PagingController::class, 'about']);

Route::view('/', 'site.index');
Route::view('/about', 'site.about');
Route::view('/rooms', 'site.rooms');
Route::view('/services', 'site.services');
Route::view('/gallery', 'site.gallery');
Route::view('/error', 'site.404');
Route::view('/contact', 'site.contact');
Route::view('/blog', 'site.blog');
Route::view('/gallerysingle', 'site.gallerysingle');
Route::view('/blogpost', 'site.blogpost');
