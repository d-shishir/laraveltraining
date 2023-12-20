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
Route::get('backend/student', [StudentController::class, 'index'])->name('backend.student.index');

Route::get('backend/borrow/create', [BorrowController::class, 'create']);
Route::post('backend/borrow', [BorrowController::class, 'store'])->name('backend.borrow.store');
Route::get('backend/borrow', [BorrowController::class, 'index'])->name('backend.borrow.index');

Route::get('backend/author/create', [AuthorController::class, 'create']);
Route::post('backend/author', [AuthorController::class, 'store'])->name('backend.author.store');
Route::get('backend/author', [AuthorController::class, 'index'])->name('backend.author.index');

Route::get('backend/book/create', [BookController::class, 'create']);
Route::post('backend/book', [BookController::class, 'store'])->name('backend.book.store');
Route::get('backend/book', [BookController::class, 'index'])->name('backend.book.index');
Route::get('backend/book/{bookId}', [BookController::class, 'show'])->name('backend.book.show');
Route::delete('backend/book/{bookId}', [BookController::class, 'destroy'])->name('backend.book.destroy');
Route::get('backend/book/{bookId}/edit', [BookController::class, 'edit'])->name('backend.book.edit');
Route::put('backend/book/{bookId}', [BookController::class, 'update'])->name('backend.book.update');


Route::get('backend/type/create', [TypeController::class, 'create'])->name('backend.type.create');
;
Route::post('backend/type', [TypeController::class, 'store'])->name('backend.type.store');
Route::get('backend/type', [TypeController::class, 'index'])->name('backend.type.index');

