<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/',[App\Http\Controllers\Frontend\Frontendcontroller::class,'index']);
Route::prefix('/services')->group(function(){
    Route::get('/ui',[App\Http\Controllers\Frontend\Frontendcontroller::class,'uiux']);
    Route::get('/websiteDevelopment',[App\Http\Controllers\Frontend\Frontendcontroller::class,'websitedevelopment']);
    Route::get('/ecommerce',[App\Http\Controllers\Frontend\Frontendcontroller::class,'ecommerce']);
    Route::get('/customSoftwareDevelopment',[App\Http\Controllers\Frontend\Frontendcontroller::class,'customsoftwaredevelopment']);
    Route::get('/dataScience',[App\Http\Controllers\Frontend\Frontendcontroller::class,'dataScience']);
    Route::get('/mobileAppDevelopment',[App\Http\Controllers\Frontend\Frontendcontroller::class,'mobileAppDevelopment']);
    Route::get('/graphicDesigning',[App\Http\Controllers\Frontend\Frontendcontroller::class,'graphicDesigning']);
    Route::get('/SLA',[App\Http\Controllers\Frontend\Frontendcontroller::class,'SLA']);
    Route::get('/contentWriting',[App\Http\Controllers\Frontend\Frontendcontroller::class,'contentWriting']);
});
Route::get('career',[App\Http\Controllers\Frontend\Frontendcontroller::class,'career']);
Route::get('blog',[App\Http\Controllers\Frontend\Frontendcontroller::class,'blog']);
Route::get('/blogPost1',[App\Http\Controllers\Frontend\Frontendcontroller::class,'blogPost1']);
Route::get('/aboutUs',[App\Http\Controllers\Frontend\Frontendcontroller::class,'aboutUs']);
Route::get('/contactUs',[App\Http\Controllers\Frontend\Frontendcontroller::class,'contactUs']);
Route::get('/faqs',[App\Http\Controllers\Frontend\Frontendcontroller::class,'faqs']);
Route::get('/appointment',[App\Http\Controllers\Frontend\Frontendcontroller::class,'appointment']);

