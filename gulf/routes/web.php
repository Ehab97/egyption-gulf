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

Route::get('/', function () {return view('signup');});
Route::get('/rsignup', function () {return view('signup');})->name('rsignup');
Route::get('/renters', function () {return view('renters');})->name('renters');
Route::get('/home', function () {return view('home');})->name('home');
Route::get('/rlogin', function () {return view('login'); })->name('rlogin');
Route::get('/agri', function () {return view('agri'); })->name('agri');
Route::get('/contract', function () {return view('contract'); })->name('contract');
Route::get('/benfits', function () {return view('benfits'); })->name('benfits');

Route::POST('/del_cont',"PostControler@del_cont")->name('del_cont');
Route::POST('/add_contr',"PostControler@add_contr")->name('add_contr');
Route::POST('/update_agri',"PostControler@update_agri")->name('update_agri');
Route::POST('/delete_agri',"PostControler@delete_agri")->name('delete_agri');
Route::POST('/add_agri',"PostControler@add_agri")->name('add_agri');
Route::POST('/delete_renter',"PostControler@delete_renter")->name('delete_renter');
Route::POST('/update_renter',"PostControler@update_renter")->name('update_renter');
Route::POST('/renters',"PostControler@renters")->name('renters');
Route::POST('/login',"PostControler@login")->name('login');
Route::POST('/signup',"PostControler@signup")->name('signup');


