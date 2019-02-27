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

Route::get('/', function () {
//    return view('welcome');
    return view('welcome',['website'=>'Laravel']);
});
Route::view('/welcome', 'welcome', ['website' => 'Laravel学院']);

Route::get('hello', function () {
    return 'Hello, Welcome to LaravelAcademy.org';
});

//Route::get('/user', 'UsersController@index');

Route::match(['get', 'post'], 'foo', function () {
    return 'This is a request from get or post';
});

Route::any('bar', function () {
    return 'This is a request from any HTTP verb';
});

Route::get('form',function(){
   return '<form method="POST" action="/foo">'
       .csrf_field()
       .'<button type="submit">提交</button></form>';
});

/**
<form method="POST" action="/profile">
{{ csrf_field() }}
...
</form>
 */

Route::redirect('/here', '/there', 301);

//Route::view('/welcome', 'welcome');
//Route::view('/welcome', 'welcome', ['name' => '学院君']);

//Route::get('user/{id}', function ($id) {
//    return 'User ' . $id;
//});

Route::get('posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return $postId . '-' . $commentId;
});

//Route::get('user/{name?}', function ($name = null) {
//    return $name;
//});

//Route::get('user/{name?}', function ($name = 'John') {
//    return $name;
//});

Route::get('user/{name}', function ($name) {
    // $name 必须是字母且不能为空
})->where('name', '[A-Za-z]+');

Route::get('user/{id}', function ($id) {
    // $id 必须是数字
})->where('id', '[0-9]+');

Route::get('user/{id}/{name}', function ($id, $name) {
    // 同时指定 id 和 name 的数据格式
})->where(['id' => '[0-9]+', 'name' => '[a-z]+']);
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/users_test', 'UsersTestController@index')->name('users_test');
