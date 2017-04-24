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

Route::get('/', 'HomeController@index');
Route::get('/store/{slug}', 'StoreController@index');
Route::get('/category/{slug}', 'CategoryController@index');
Route::get('/stores/{term?}', 'StoreController@allStore');
Route::get('/categories/{term?}', 'CategoryController@allCategories');

Route::auth();
Route::get('/logout', function (){
    Auth::logout();
    return redirect('/');
});

Route::get('/dashboard', 'DashboardController@index');
Route::get('/dashboard/clicks', 'DashboardController@clicks');
Route::get('/dashboard/orders', 'DashboardController@orders');
Route::get('/dashboard/transactions', 'DashboardController@transactions');
Route::get('/dashboard/profile', 'DashboardController@user');
Route::post('/dashboard/save', 'DashboardController@saveUser');
Route::get('/dashboard/tickets', 'DashboardController@tickets');
Route::get('/dashboard/ticket/add', 'DashboardController@addTicket');
Route::post('/dashboard/ticket/save', 'DashboardController@saveTicket');
Route::get('/dashboard/redeem', 'RedeemController@index');
Route::get('/dashboard/voucher', 'RedeemController@initGiftVoucher');
Route::post('/dashboard/voucher/add', 'RedeemController@add');
Route::get('/dashboard/voucher/history', 'RedeemController@voucherHistory');
Route::get('/dashboard/bank-transfer', 'RedeemController@initBankTransfer');
Route::post('/dashboard/bank-transfer/add', 'RedeemController@bankTransferAdd');
Route::get('/dashboard/bank-transfer/history', 'RedeemController@bankTransferHistory');
Route::get('/dashboard/recharge', 'RedeemController@initRecharge');
Route::post('/dashboard/do-recharge', 'RedeemController@doRecharge');