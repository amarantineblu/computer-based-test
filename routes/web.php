<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ExamController;
use App\Http\Controllers\PracticeController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\WelcomeController;
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


Route::get('/', [WelcomeController::class, 'index'])->name('welcome');
Route::get('/practice', [PracticeController::class, 'practice'])->name('practice');


// Route::get('/dashboard', function () {

// })->middleware(['auth'])->name('dashboard');

Route::middleware(['auth'])->prefix('dashboard')->group(function(){
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/all-test', [DashboardController::class, 'allTest'])->name('all-test');

    Route::get('/exam-view', [ExamController::class, 'exam_view'])->name('exam.view');
    Route::post('/post-exam', [ExamController::class, 'post_exam'])->name('post.exam');
    Route::get('/update-exam/{id}', [ExamController::class, 'update_exam_page'])->name('update_page.exam');
    Route::post('/update-exam/{id}', [ExamController::class, 'update_exam'])->name('update.exam');
    Route::get('/delete-exam/{id}', [ExamController::class, 'delete_exam'])->name('delete.test');

    Route::get('/manage_exam/{id}', [QuestionController::class, 'index'])->name('question.page');
    Route::post('/post-question', [QuestionController::class, 'post_question'])->name('post.question');
    Route::get('/edit_question/{id}', [QuestionController::class, 'edit_question_page'])->name('edit_question.page');
    Route::post('/post_edited_question', [QuestionController::class, 'post_edited_question'])->name('edit.question');


});

require __DIR__.'/auth.php';
