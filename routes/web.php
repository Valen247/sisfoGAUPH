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
    return view('welcome');
});

Route::resource('admin/category', 'App\\Http\\Controllers\\Admin\categoryController');
Route::resource('admin/user-role', 'App\\Http\\Controllers\\Admin\userRoleController');
Route::resource('admin/reservation-status', 'App\\Http\\Controllers\\Admin\reservationStatusController');
Route::resource('admin/missing-item-status', 'App\\Http\\Controllers\\Admin\missingItemStatusController');
Route::resource('admin/missing-item-status', 'App\\Http\\Controllers\\Admin\missingItemStatusController');
Route::resource('admin/attendance', 'App\\Http\\Controllers\\Admin\attendanceController');
Route::resource('admin/reservation', 'App\\Http\\Controllers\\Admin\reservationController');
Route::resource('admin/schedule', 'App\\Http\\Controllers\\Admin\scheduleController');
Route::resource('admin/replacement-class', 'App\\Http\\Controllers\\Admin\replacementClassController');
Route::resource('admin/room', 'App\Http\Controllers\Admin\roomController');
Route::resource('admin/location', 'App\Http\Controllers\Admin\locationController');
Route::resource('admin/lesson', 'App\Http\Controllers\Admin\lessonController');
Route::resource('admin/missing-item-status', 'App\\Http\\Controllers\\Admin\missingItemStatusController');
Route::resource('admin/user', 'App\Http\Controllers\Admin\UserController');
Route::resource('admin/request-missing-item', 'App\Http\Controllers\Admin\requestMissingItemController');
Route::resource('admin/request-missing-item', 'App\Http\Controllers\Admin\requestMissingItemController');
Route::resource('admin/student', 'App\Http\Controllers\Admin\studentController');
Route::resource('admin/missing-item-status', 'App\\Http\\Controllers\\Admin\missingItemStatusController');