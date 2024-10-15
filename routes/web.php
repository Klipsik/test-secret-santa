<?php

namespace App\Http\Controllers;

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

Route::group(['controller' => ParticipantController::class, 'prefix' => 'participants'], function () {
    Route::get('{id}', 'show')->name('participants.show');
});

Route::group(['controller' => UserController::class, 'prefix' => 'users'], function () {
    Route::get('/', 'index')->name('users.index');
    Route::get('/delete-user', 'showDeleteForm')->name('users.delete.user.form');
    Route::post('/delete-user', 'destroy')->name('users.delete.user');
});
