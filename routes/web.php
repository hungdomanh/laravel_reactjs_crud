<?php
<<<<<<< HEAD
=======

>>>>>>> c2eb8c81ae584adcc99f3c29b36420b5e0d7b42c
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

<<<<<<< HEAD
function newFunction()
{
    echo "Hi!";
}

=======
>>>>>>> c2eb8c81ae584adcc99f3c29b36420b5e0d7b42c
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
<<<<<<< HEAD
Route::get('/task', 'TaskController@test')->name('task');
// Route::get('test', 'TaskController@store');
Route::resource('tasks', 'TaskController');
=======
>>>>>>> c2eb8c81ae584adcc99f3c29b36420b5e0d7b42c
