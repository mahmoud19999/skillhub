<?php

use App\Http\Controllers\CatController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LangController;
use App\Http\Controllers\SkillController;
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
Route::middleware('langg')->group(function()
{
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/categories/show/{id}', [CatController::class, 'show'])->name('cats');
    Route::get('/skills/show/{id}', [SkillController::class, 'show'])->name('skills');
    Route::get('/exams/show/{id}/', [ExamController::class, 'show'])->name('exams');
    Route::get('/exams/questions/{id}/', [ExamController::class, 'questions'])->name('questions');
    Route::get('/contact', [ContactController::class, 'index'])->name('contact');


});

Route::post('/contact/message/send', [ContactController::class, 'send'])->name('message');

Route::get('/lang/set/{lang}/', [LangController::class, 'set']);

