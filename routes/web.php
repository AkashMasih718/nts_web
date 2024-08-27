<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjectsController;
use Illuminate\Support\Facades\Route;


Route::get('/',[HomeController::class, 'index']);
Route::get('soler_project',[ProjectsController::class, 'solor']);
Route::get('project',[ProjectsController::class, 'project']);
Route::get('rozgar_project',[ProjectsController::class, 'rozgar']);
Route::get('shops_project',[ProjectsController::class, 'shop']);