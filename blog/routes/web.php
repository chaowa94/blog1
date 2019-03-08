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

//首页
Route::get('/','MsgController@index');

//查
Route::get('/view/{id}','MsgController@view');

//回复
Route::post('/reply/{id}','MsgController@reply');

//增
Route::get('/add',function(){
    return view('/add');
});
Route::post('/add','MsgController@add');

//删
Route::get('/delete/{id}','MsgController@delete');

//改
Route::get('/edit/{id}','MsgController@edit');
Route::post('/edit/{id}','MsgController@postEdit');


// --------------------------------------------------------------------------
// //请求
// Route::get('/request','MsgController@request');

// //Session
// Route::group(['middleware'=>['web']],function(){
//     Route::get('/session1','MsgController@session1');
//     Route::get('/session2','MsgController@session2');
// });

// //响应
// Route::get('/response','MsgController@response');

// //中间件
// Route::get('/activity0','MsgController@activity0');//宣传页面
// Route::group(['middleware'=>['activity'],function(){
//     Route::get('/activity1','MsgController@activity1');//活动页面
//     Route::get('/activity2','MsgController@activity2');
// }]);


