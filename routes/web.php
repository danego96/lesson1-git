<?php

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
    return view('groups/index');
})->name('home');

Route::get('/groups', [App\Http\Controllers\GroupController::class, 'list'])->name('list');

Route::get('/groups/create', [App\Http\Controllers\GroupController::class, 'create'])->name('create-group');

Route::get('/groups/edit', [App\Http\Controllers\GroupController::class, 'edit'])->name('edit-group');

Route::post('/groups/delete', [App\Http\Controllers\GroupController::class, 'delete'])->name('delete-group');

Route::post('/group-create/submit', [App\Http\Controllers\GroupController::class, 'submit'])->name('group-form');