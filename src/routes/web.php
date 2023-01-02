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

Route::get('/admin', [IssueController::class, 'index'])->middleware(['auth', 'verified'])->name('admin');

Route::get('/admin/create', [IssueController::class, 'create'])->middleware(['auth', 'verified'])->name('admin.create');

Route::post('/admin/store', [IssueController::class, 'store'])->middleware(['auth', 'verified'])->name('admin.store');

Route::get('/admin/edit/{id?}', [IssueController::class, 'edit'])->middleware(['auth', 'verified'])->name('admin.edit');

Route::post('/admin/update/{id?}', [IssueController::class, 'update'])->middleware(['auth', 'verified'])->name('admin.update');

Route::post('/admin/destroy/{id?}', [IssueController::class, 'destroy'])->middleware(['auth', 'verified'])->name('admin.destroy');

Route::get('/admin/question/{id?}', [QuestionController::class, 'index'])->middleware(['auth', 'verified'])->name('admin.question');

Route::get('/admin/question/detail/{id?}', [QuestionController::class, 'detail'])->middleware(['auth', 'verified'])->name('admin.question.detail');

Route::get('/admin/question/create', [QuestionController::class, 'create'])->middleware(['auth', 'verified'])->name('admin.question.create');

Route::post('/admin/question/store', [QuestionController::class, 'store'])->middleware(['auth', 'verified'])->name('admin.question.store');

Route::get('/admin/question/edit/{id?}', [QuestionController::class, 'edit'])->middleware(['auth', 'verified'])->name('admin.question.edit');

Route::post('/admin/question/update/{id?}', [QuestionController::class, 'update'])->middleware(['auth', 'verified'])->name('admin.question.update');

Route::post('/admin/question/destroy/{id?}', [QuestionController::class, 'destroy'])->middleware(['auth', 'verified'])->name('admin.question.destroy');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
