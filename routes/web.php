<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectsController;
use App\Http\Controllers\SchemeController;
use Illuminate\Support\Facades\Route;


Route::get('/',[HomeController::class, 'index']);
Route::get('about_complex',[HomeController::class, 'complex']);
Route::get('About_us', [HomeController::class, 'about']);
Route::get('contact_us', [HomeController::class, 'contact']);


Route::get('test_view', [HomeController::class, 'test_view']);
Route::post('send-email', [ContactController::class, 'sendEmail'])->name('send.email');



Route::get('soler_project',[ProjectsController::class, 'solor']);
Route::get('project',[ProjectsController::class, 'project']);
Route::get('rozgar_project',[ProjectsController::class, 'rozgar']);
Route::get('shops_project',[ProjectsController::class, 'shop']);
Route::get('ration_project',[ProjectsController::class, 'ration']);


Route::get('Schemes',[SchemeController::class, 'schemes']);
