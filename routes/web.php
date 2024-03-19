<?php

use App\Http\Controllers\AuthorsController;
use App\Http\Controllers\BooksController;
use Illuminate\Support\Facades\Route;

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

Route::get('/authors', [AuthorsController::class, 'index'])->name('authors.index');
Route::get('/authors/create', [AuthorsController::class, 'create'])->name('authors.create');
Route::get('/authors/edit/{id}', [AuthorsController::class, 'edit'])->name('authors.edit');

Route::post('/authors/store', [AuthorsController::class, 'store'])->name('authors.store');
Route::put('/authors/update', [AuthorsController::class, 'update'])->name('authors.update');
Route::delete('/authors/delete/{id}', [AuthorsController::class, 'delete'])->name('authors.delete');


Route::get('/books', [BooksController::class, 'index'])->name('books.index');
