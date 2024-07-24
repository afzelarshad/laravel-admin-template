<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', 'IndexController@index')->name('home');

Auth::routes([
  'register' => false, // Registration Routes...
  'reset' => true, // Password Reset Routes...
  'verify' => true, // Email Verification Routes...
]);

Route::get('verify/resend', 'Auth\TwoFactorController@resend')->name('verify.resend');
Route::resource('verify', 'Auth\TwoFactorController')->only(['index', 'store']);

Route::middleware(['auth', 'twofactor'])->prefix('admin')->group(function () {
  // Test Route
  Route::get('test', 'Admin\TestController@test')->name('admin.test');

  // For Dashboard
  Route::get('dashboard', 'Admin\HomeController@index')->name('admin.dashboard');

  // For Module
  Route::get('modules', 'Admin\ModuleController@index')->name('admin.modules.index');
  Route::get('modules/add', 'Admin\ModuleController@create')->name('admin.modules.create');
  Route::get('modules/edit/{encrypted_id}', 'Admin\ModuleController@edit')->name('admin.modules.edit');
  Route::get('modules/show/{encrypted_id}', 'Admin\ModuleController@show')->name('admin.modules.show');
  Route::post('modules/store', 'Admin\ModuleController@store')->name('admin.modules.store');
  Route::post('modules/update', 'Admin\ModuleController@update')->name('admin.modules.update');
  Route::get('modules/ajax', 'Admin\ModuleController@ajax')->name('admin.modules.ajax');
  Route::post('modules/delete', 'Admin\ModuleController@delete')->name('admin.modules.delete');

  // For Users
  Route::get('users', 'Admin\UserController@index')->name('admin.users.index');
  Route::get('users/add', 'Admin\UserController@create')->name('admin.users.create');
  Route::get('users/edit/{encrypted_id}', 'Admin\UserController@edit')->name('admin.users.edit');
  Route::get('users/show/{encrypted_id}', 'Admin\UserController@show')->name('admin.users.show');
  Route::post('users/store', 'Admin\UserController@store')->name('admin.users.store');
  Route::post('users/update', 'Admin\UserController@update')->name('admin.users.update');
  Route::get('users/ajax', 'Admin\UserController@ajax')->name('admin.users.ajax');
  Route::post('users/delete', 'Admin\UserController@delete')->name('admin.users.delete');

  // For Roles
  Route::get('roles', 'Admin\RoleController@index')->name('admin.roles.index');
  Route::get('roles/add', 'Admin\RoleController@create')->name('admin.roles.create');
  Route::get('roles/edit', 'Admin\RoleController@edit')->name('admin.roles.edit');
  Route::get('roles/show/{encrypted_id}', 'Admin\RoleController@show')->name('admin.roles.show');
  Route::post('roles/store', 'Admin\RoleController@store')->name('admin.roles.store');
  Route::post('roles/update', 'Admin\RoleController@update')->name('admin.roles.update');
  Route::get('roles/ajax', 'Admin\RoleController@ajax')->name('admin.roles.ajax');
  Route::post('roles/delete', 'Admin\RoleController@delete')->name('admin.roles.delete');

  // For Settings
  Route::get('settings', 'Admin\SettingController@index')->name('admin.settings.index');
  Route::get('settings/add', 'Admin\SettingController@create')->name('admin.settings.create');
  Route::get('settings/edit/{encrypted_id}', 'Admin\SettingController@edit')->name('admin.settings.edit');
  Route::get('settings/show/{encrypted_id}', 'Admin\SettingController@show')->name('admin.settings.show');
  Route::get('settings/edit_profile', 'Admin\SettingController@edit_profile')->name('admin.settings.edit_profile');
  Route::post('settings/store', 'Admin\SettingController@store')->name('admin.settings.store');
  Route::post('settings/update', 'Admin\SettingController@update')->name('admin.settings.update');
  Route::get('settings/ajax', 'Admin\SettingController@ajax')->name('admin.settings.ajax');
  Route::post('settings/delete', 'Admin\SettingController@delete')->name('admin.settings.delete');

  // For Testreports
  Route::get('testreports', 'Admin\TestreportController@index')->name('admin.testreports.index');
  Route::get('testreports/add', 'Admin\TestreportController@create')->name('admin.testreports.create');
  Route::get('testreports/edit/{encrypted_id}', 'Admin\TestreportController@edit')->name('admin.testreports.edit');
  Route::get('testreports/show/{encrypted_id}', 'Admin\TestreportController@show')->name('admin.testreports.show');
  Route::post('testreports/store', 'Admin\TestreportController@store')->name('admin.testreports.store');
  Route::post('testreports/update', 'Admin\TestreportController@update')->name('admin.testreports.update');
  Route::get('testreports/ajax', 'Admin\TestreportController@ajax')->name('admin.testreports.ajax');
  Route::post('testreports/delete', 'Admin\TestreportController@delete')->name('admin.testreports.delete');
  // For Doctors
  Route::get('doctors', 'Admin\DoctorController@index')->name('admin.doctors.index');
  Route::get('doctors/add', 'Admin\DoctorController@create')->name('admin.doctors.create');
  Route::get('doctors/edit/{encrypted_id}', 'Admin\DoctorController@edit')->name('admin.doctors.edit');
  Route::get('doctors/show/{encrypted_id}', 'Admin\DoctorController@show')->name('admin.doctors.show');
  Route::post('doctors/store', 'Admin\DoctorController@store')->name('admin.doctors.store');
  Route::post('doctors/update', 'Admin\DoctorController@update')->name('admin.doctors.update');
  Route::get('doctors/ajax', 'Admin\DoctorController@ajax')->name('admin.doctors.ajax');
  Route::post('doctors/delete', 'Admin\DoctorController@delete')->name('admin.doctors.delete');
  // For Labtests
  Route::get('labtests', 'Admin\LabtestController@index')->name('admin.labtests.index');
  Route::get('labtests/add', 'Admin\LabtestController@create')->name('admin.labtests.create');
  Route::get('labtests/edit/{encrypted_id}', 'Admin\LabtestController@edit')->name('admin.labtests.edit');
  Route::get('labtests/show/{encrypted_id}', 'Admin\LabtestController@show')->name('admin.labtests.show');
  Route::post('labtests/store', 'Admin\LabtestController@store')->name('admin.labtests.store');
  Route::post('labtests/update', 'Admin\LabtestController@update')->name('admin.labtests.update');
  Route::get('labtests/ajax', 'Admin\LabtestController@ajax')->name('admin.labtests.ajax');
  Route::post('labtests/delete', 'Admin\LabtestController@delete')->name('admin.labtests.delete');
});
