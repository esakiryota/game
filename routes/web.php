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

Route::get('/', "GameController@index");
Route::get('/start', "GameController@start");
Route::get('/start/math', "GameController@startmath");
Route::post('/start/math', "GameController@startmathpost");
Route::get('/start/english', "GameController@startenglish");
Route::post('/start/english', "GameController@startenglishpost");
Route::get('/start/practice', "GameController@startpractice");
Route::post('/start/practice', "GameController@startpracticepost");

Route::get('/parents', "GameController@parents");
Route::get('/explain_web', "GameController@explainWeb");
Route::get('/explain', "GameController@explain");
Route::post('/explain', "GameController@explainpost");
// Route::get('/login', "GameController@login");
Route::get('/system', "GameController@system");
// Route::post('/login', "GameController@loginpost");
Route::get('/create', "GameController@create");
Route::post('/create', "GameController@createpost");
Route::get('/user', "UserController@index");
Route::get('/user/text1', "GameController@text1");
Route::post('/user/text1', "GameController@text1post");
Route::get('/user/text2', "GameController@text2");
Route::post('/user/text2', "GameController@text2post");
Route::get('/user/text3', "GameController@text3");
Route::post('/user/text3', "GameController@text3post");
Route::get('/user/text4', "GameController@text4");
Route::post('/user/text4', "GameController@text4post");
Route::get('/user/text5', "GameController@text5");
Route::post('/user/text5', "GameController@text5post");
Route::get('/user/entext0', "GameController@entext0");
Route::post('/user/entext0', "GameController@entext0post");
Route::get('/user/practice0', "GameController@practice0");
Route::post('/user/practice0', "GameController@practice0post");
Route::get('/user/practice1', "GameController@practice1");
Route::post('/user/practice1', "GameController@practice1post");
Route::get('/user/practice2', "GameController@practice2");
Route::post('/user/practice2', "GameController@practice2post");
Route::get('/user/practice3', "GameController@practice3");
Route::post('/user/practice3', "GameController@practice3post");
Route::get('/user/practice4', "GameController@practice4");
Route::post('/user/practice4', "GameController@practice4post");
Route::get('/user/practice5', "GameController@practice5");
Route::post('/user/practice5', "GameController@practice5post");
Route::get('/user/practice6', "GameController@practice6");
Route::post('/user/practice6', "GameController@practice6post");
Route::get('/user/practice7', "GameController@practice7");
Route::post('/user/practice7', "GameController@practice7post");
Route::get('/user/practice8', "GameController@practice8");
Route::post('/user/practice8', "GameController@practice8post");
Route::get('/user/danjon1', "DanjonController@danjon1");
Route::get('/user/danjon2', "GameController@danjon2");
Route::get('/user/danjon3', "GameController@danjon3");
Route::get('/user/danjon4', "GameController@danjon4");
Route::get('/user/move', "GameController@move");
Route::get('/user/english_training_0', "GameController@english_training_0");

Route::any('adminer', '\Miroc\LaravelAdminer\AdminerController@index');
// Route::any('adminer', '\Miroc\LaravelAdminer\AdminerAutologinController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth']], function () {
  Route::get('/math', "DanjonController@danjon1");
  Route::get('/english', "DanjonController@danjon2");
  Route::get('/hometown', "DanjonController@danjon3");
  Route::get('/english/{level}', "TextController@englishindex");
  Route::post('/english/1-1', "TextController@update");
  Route::get('/math/{level}', "TextController@index");
  Route::post('/math/1-1', "TextController@update");
  Route::get('/english/{level}/practice', "TextController@praEnglishIndex");
  Route::post('/english/practice', "TextController@praceticeUpdate");
});

Route::get('/account', "DataController@index");
Route::post('/account', "DataController@store");
