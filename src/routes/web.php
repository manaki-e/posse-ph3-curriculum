<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\admin\QuestionController;
use App\Http\Controllers\admin\IssueController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('quiz_list');
})->name('/');

Route::get('/quiz/{id?}', [QuizController::class, 'index']);

Route::middleware(['auth', 'verified'])->group(function () {
    Route::controller(IssueController::class)->group(function () {
        Route::get('/admin', 'index')->name('admin');
        Route::get('/admin/create', 'create')->name('admin.create');
        Route::post('/admin/store', 'store')->name('admin.store');
        Route::get('/admin/edit/{id?}', 'edit')->name('admin.edit');
        Route::post('/admin/update/{id?}', 'update')->name('admin.update');
        Route::post('/admin/destroy/{id?}', 'destroy')->name('admin.destroy');
        Route::post('/admin/up/{pos?}', 'up')->name('admin.up');
        Route::post('/admin/down/{pos?}', 'down')->name('admin.down');
    });
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::controller(QuestionController::class)->group(function () {
        Route::get('/admin/question/detail/{id?}', 'detail')->name('admin.question.detail');
        Route::post('/admin/question/store', 'store')->name('admin.question.store');
        Route::get('/admin/question/edit/{id?}', 'edit')->name('admin.question.edit');
        Route::post('/admin/question/update/{id?}', 'update')->name('admin.question.update');
        Route::post('/admin/question/destroy/{id?}', 'destroy')->name('admin.question.destroy');
        Route::post('/admin/question/up/{id?}/{pos?}', 'up')->name('admin.question.up');
        Route::post('/admin/question/down/{id?}/{pos?}', 'down')->name('admin.question.down');
        Route::get('/admin/question/{id?}', 'index')->name('admin.question');
        Route::get('/admin/question/{id?}/create', 'create')->name('admin.question.create');
    });
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
