<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UrlController;

Route::get('/', [UrlController::class, 'index']);
Route::post('/shorten', [UrlController::class, 'store']);
Route::get('/{shortened_url}', [UrlController::class, 'show']);
Route::get('/', function () {
    return view('welcome');
});
