<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Route::redirect('/', '/login');
Route::redirect('/home', '/admin');
Auth::routes(['register' => false]);

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@index')->name('home');
    
    // Permissions
    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
    Route::resource('permissions', 'PermissionsController');

    // Roles
    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
    Route::resource('roles', 'RolesController');

    // Users
    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
    Route::resource('users', 'UsersController');

    // Rooms
    Route::resource('rooms', 'ServicesController');
    Route::group(['prefix' => 'rooms'], function(){
        Route::delete('destroy', 'ServicesController@destroy')->name('rooms.destroy');
    });

    // Checkins
    Route::delete('checkins/destroy', 'EmployeesController@massDestroy')->name('employees.massDestroy');
    Route::post('checkins/media', 'EmployeesController@storeMedia')->name('employees.storeMedia');
    Route::resource('checkins', 'EmployeesController');

    // Book History
    Route::delete('book_history/destroy', 'ClientsController@massDestroy')->name('clients.massDestroy');
    Route::resource('book_history', 'ClientsController');

});
