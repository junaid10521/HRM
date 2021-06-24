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
Route::get('dashboard','admin\dashboard\DashboardController@index');
Route::prefix('users')->group(function () {
    Route::get('/users-list', function () {
        return view('admin.users.index');
    });
});

Route::prefix('roles')->group(function () {
    Route::get('roles-list','admin\roles\RolesController@index');
});

Route::prefix('employees')->group(function () {
    Route::get('employees-list','admin\employees\EmployeesController@index');
});

Route::prefix('companies')->group(function () {
    Route::get('companies-list','admin\companies\CompaniesController@index');
});

Route::prefix('permissions')->group(function () {
    Route::get('permissions-list','admin\permissions\PermissionsController@index');
});
