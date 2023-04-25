<?php

use App\Http\Controllers\Api\ManufacturersControllerApi;
use App\Http\Controllers\Api\SavedManufacturersApiController;
use Illuminate\Support\Facades\Route;

Route::resource('favorite_manufacturers', SavedManufacturersApiController::class)->only(['index', 'store']);
Route::resource('manufacturers', ManufacturersControllerApi::class)->only('index', 'show');
