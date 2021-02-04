<?php

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

// Route::get('/', function () {
//   return view('pages.dashboard');
//
// });

Auth::routes();


Route::group(['middleware' => 'auth'], function () {
    //    Route::get('/link1', function ()    {
//        // Uses Auth Middleware
//    });
Route::get('/', function () {
      return redirect('login');
});

Route::get('logout', 'Auth\LoginController@logout');

Route::resource('role', 'RoleController');
Route::resource('user', 'UserController');
Route::any('/search_user', 'UserController@search');
Route::post('change_status', 'UserController@change_login_status');
Route::post('changepass/{id}', ['as' => 'changepass', 'uses' => 'UserController@change_cms_password']);



Route::get('home','TechnicianController@all_technician')->name('all_technician');

Route::get('enroll_technician/{id}','TechnicianController@enroll_technician')->name('enroll_technician');

Route::post('view_participants_modal', 'TechnicianController@view_participants_modal');

Route::get('preenlistment','TechnicianController@preenlistment')->name('preenlistment');
Route::get('trainingindex','TechnicianController@trainingindex')->name('trainingindex');
Route::get('techniciandirectory','TechnicianController@techniciandirectory')->name('techniciandirectory');
Route::get('import','TechnicianController@import')->name('import');
Route::get('export','TechnicianController@export')->name('export');
Route::get('competence','TechnicianController@competence')->name('competence');
Route::get('add_technician','TechnicianController@add_technician')->name('add_technician');
Route::get('add_technician_directory','TechnicianController@add_technician_directory')->name('add_technician_directory');

Route::get('users','UserController@index')->name('users');
Route::get('roles','RoleController@index')->name('roles');

Route::get('events', 'EventController@index');

});
