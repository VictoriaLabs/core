<?php

use Illuminate\Support\Facades\Route;
use Sentry;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/test', function () {
    Sentry::captureException(new Exception('Test error'));
    //return view('welcome');
    //throw new Exception('My first GlitchTip error!');
});
