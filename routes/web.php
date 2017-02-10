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
    return view('welcome');
});
Route::get('/paginainiziale', ['as'=>'returnpaginainiziale','uses'=>'prova@returnpaginainiziale']);
Route::get('/chisiamo', ['as'=>'returnchisiamo','uses'=>'prova@returnchisiamo']);
Route::get('/acquistaprova', ['as'=>'returnacquista','uses'=>'prova@returnacquista']);
Route::get('/loginmio', ['as'=>'returnloginmio','uses'=>'prova@returnloginmio']);
Route::get('/registrati',['as'=>'returnregistrati','uses'=>'prova@returnregistrati']);
Route::get('/primanota',['as'=>'returnprimanota','uses'=>'prova@primanota']);
Route::get('/metodopagamento',['as'=>'returnpagamento','uses'=>'prova@pagamento']);
Route::get('/grazie',['as'=>'grazie','uses'=>'prova@grazie']);
Route::post('/postVersion',['as'=>'postVersion','uses'=>'prova@postVersion']);
Auth::routes();

Route::get('/home', 'HomeController@index');

Auth::routes();

Route::get('/home', 'HomeController@index');
