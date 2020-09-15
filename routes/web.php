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
Route::get('/add-batch', 'Admin\BatchController@add_batch');
Route::post('batch-register', 'Admin\BatchController@save_batch');
Route::get('batch_list', 'Admin\BatchController@batch_list');
Route::get('/add-student', 'Admin\StudentController@add_student');
Route::post('student-register', 'Admin\StudentController@save_student');
Route::get('student_list', 'Admin\StudentController@student_list');
Route::get('edit-student/{id}', 'Admin\StudentController@edit');
Route::post('student-update', 'Admin\StudentController@update');
Route::get('view-location', 'Admin\StudentController@view_location');