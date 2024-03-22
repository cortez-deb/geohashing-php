<?php
use Illuminate\Http\Requestt;
use Illuminate\Support\Facades\Route;
use app\Http\Controllers\location;


Route::get('location',[location::class,'index']);
