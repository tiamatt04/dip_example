<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;
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
    return view('welcome');
})->name('/');
Route::view('/registration', 'users.registration')->name('register');
Route::post('/registration', [UserController::class, 'register']);
Route::view('/authorization', 'users.authorization')->name('auth');
Route::post('/authorization', [UserController::class, 'authorization']);
Route::middleware('auth')->group(function (){
    Route::get('/logout', [UserController::class , 'logout'])->name('logout');
    Route::middleware('role')->group(function (){
        Route::view('admin/', 'admins.admin')->name('admin');
        Route::get('admin/category', [CategoryController::class, 'CategoryView'])->name('category');
        Route::post('admin/category', [CategoryController::class, 'CategoryAdd']);
        Route::post('admin/deleteCategory{category}', [CategoryController::class, 'CategoryDelete'])->name('deleteCategory');
        Route::post('admin/editCategory{category}', [CategoryController::class, 'CategoryEdit'])->name('editCategory');
    });
});