<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\BorrowController;
use App\Http\Controllers\TypeController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthorController;

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
    return view('welcome');
});


Route::get('backend/test/create', [TestController::class, 'create'])->name('backend.test.create');
Route::post('backend/test', [TestController::class, 'store'])->name('backend.test.store');

Route::get('backend/student/create', [StudentController::class, 'create']);
Route::post('backend/student', [StudentController::class, 'store'])->name('backend.student.store');

Route::get('backend/borrow/create', [BorrowController::class, 'create']);
Route::post('backend/borrow', [BorrowController::class, 'store'])->name('backend.borrow.store');

Route::get('backend/author/create', [AuthorController::class, 'create']);
Route::post('backend/author', [AuthorController::class, 'store'])->name('backend.author.store');

Route::get('backend/book/create', [BookController::class, 'create']);
Route::post('backend/book', [BookController::class, 'store'])->name('backend.book.store');

Route::get('backend/type/create', [TypeController::class, 'create'])->name('backend.type.create');;
Route::post('backend/type', [TypeController::class, 'store'])->name('backend.type.store');

