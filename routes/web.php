<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\main_controllers;
use App\Http\Controllers\admin_controller;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route:: get('/about', [main_controllers::class,'get_about']);
Route:: get('/menu', [main_controllers::class,'get_menu']);
Route:: get('/booking', [main_controllers::class,'get_booking']);
Route:: get('/admincategory', [admin_controller::class,'addcategory']);
Route:: post('/adminaddcategory', [admin_controller::class,'toaddcategory']);
Route:: get ('/adminitem', [admin_controller::class, 'showCategories'])->name('form.showCategories');
Route:: post('/adminitem', [admin_controller::class,'toadditem'])->name('admin.toadditem');
Route:: get('/admin/add/user', [admin_controller::class,'add_user']);
Route:: get('/admin/showtags', [admin_controller::class,'show_category'])->name('adminshowtags');
Route::get('/admin/editcategory', [admin_controller::class,'edit_category']);
Route::get('/admin/edititem', [admin_controller::class,'edit_item']);
Route::get('/adminlog539', [admin_controller::class,'logIn']);
Route::post('/admin/showtags', [admin_controller::class,''])->name('deletingtag.toDeleteTag');


