<?php

use App\Http\Controllers\ContactController;
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


Route::post('add-contact', [ContactController::class, 'create'])->name('contacts.store');
Route::PUT('update/{id}', [ContactController::class, 'update'])->name('contacts.update');
Route::delete('contact/destroy/{id}', [ContactController::class, 'delete'])->name('contacts.destroy');
