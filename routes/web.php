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
//     return view('welcome');
// });
Route::get('/home', 'Admin\AdminController@index');
Route::get('/course_list', 'Admin\CourseController@course_list');
Route::get('/add-course', 'Admin\CourseController@add_course');
Route::post('course-register', 'Admin\CourseController@store');
Route::get('edit-course/{id}', 'Admin\CourseController@edit');
Route::post('course-update', 'Admin\CourseController@update');
Route::post('delete-course', 'Admin\CourseController@delete');

