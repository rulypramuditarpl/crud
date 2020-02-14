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
// Route::get('/home', function () {
//     $nama = 'Welchome';
//     return view('about',['nama' => $nama]);
// });
// Route::get('/index', function () {
//     $nama = 'Selamat Datang';
//     return view('index', ['nama' => $nama]);
// });

route::get('/','pagesController@Welcome');
route::get('/home','pagesController@home');
route::get('/index','pagesController@about');
route::get('/siswa','SiswaController@index');


//Data siswa
// route::get('/students','StudentsController@index');
// route::get('/students/create','StudentsController@create');
// route::get('/students/{student}','StudentsController@show');
// route::post('/students','StudentsController@store');
// route::delete('/students/{student}','StudentsController@destroy');
// route::get('/students/{student}/edit','StudentsController@edit');
// route::patch('/students/{student}','StudentsController@update');
route::resource('students', 'StudentsController');

