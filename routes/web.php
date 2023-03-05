<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UploadController;

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

Route::get('/', function () {
    return view('home');
});

Route::get('/cosa-facciamo', function () {
    return view('cosa-facciamo');
});

Route::get('/contatti', function () {
    return view('contatti');
});

Route::get('/lavora-con-noi', function () {
    return view('lavora-con-noi');
});

Route::post('stampa',[UploadController::class, 'upload']);