<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LocationControllers;


Route::get('api/location/gethash',[LocationControllers::class,'getHashs']);
Route::get('api/location/createhash',[LocationControllers::class,'createHashs']);
Route::get('api/location/deletehash',[LocationControllers::class,'deleteHashs']);


