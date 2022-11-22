<?php

use App\Http\Controllers\QuizController;
use App\Http\Controllers\ChoiceController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/quiz_list', function () {
    return view('quiz_list');
});

Route::get('/quiz/{id?}', [QuizController::class, 'index']);
