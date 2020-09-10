<?php

use Illuminate\Support\Facades\Route;
use App\Course;
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

Route::get('/', function () {
    $all_courses=Course::all();

    return view('welcome',['all_courses'=>$all_courses]);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/add_students', 'AddStudentController@index')->name('add_students');
Route::post('/add_students', 'AddStudentController@store')->name('add_students');
Route::get('/allcourses', 'AddStudentController@index')->name('allcourses');
Route::delete('/delete_student/{allstd}', 'AddStudentController@destroy')->name('delete_student');
Route::get('/update/edit/{id}', 'AddStudentController@edit')->name('edit');
Route::put('/update/{id}', 'AddStudentController@update')->name('update');
Route::get('/add_courses', 'CourseController@index')->name('add_courses');
Route::post('/create_courses', 'CourseController@store')->name('create_courses');
Route::get('/all_courses', 'CourseController@show')->name('all_courses');
Route::delete('/delete_course/{courseid}', 'CourseController@destroy')->name('delete_course');
Route::get('/edit/{course}', 'CourseController@edit')->name('edit_course');
Route::put('/update/{id}', 'CourseController@update')->name('update');
Route::delete('/deleteall', 'CourseController@destroyall')->name('deleteall');
Route::get('/add_expense', 'ExpenseController@index')->name('add_expense');













// Route::get('/add_student', 'AddStudentController@index')->name('add_student');
// Route::post('/add_student', 'AddStudentController@store')->name('add_student');


