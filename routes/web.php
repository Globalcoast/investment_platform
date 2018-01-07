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

/* Route::get('/', function () {
    return view('welcome');
}); */

//blockchain payment proceesing  CALLBACK route

Route::get('/blockchain/payment', 'ProcessBlockChainPaymentController@confirmPayment');

//blockchain payment proceesing CALLBACK route

//cron route

Route::get('/admin/cron', 'Admin\SiteConfigController@Cron');

//cron route

Route::get('/', 'Auth\RegisterController@showRegistrationForm')->name('register');

Route::get('/ref/{email}','Auth\RegisterController@showRegistrationFormWithRef')->name('register');

Auth::routes();

Route::post('/inbox/create', 'InboxController@create');

Route::get('/faqs', function(){
	return view('faqs');
});

Route::get('/about', function(){

	return view('about');

});



Route::get('/new', 'OtherPagesController@news');



Route::group(['middleware'=>['auth']], function(){

Route::get('/user/block', function(){

	return view('account.block');

});

});



Route::group(['middleware'=>['auth','is_block']], function(){

Route::get('/setting','SettingController@read');

Route::post('/setting', 'SettingController@update');

});

Route::group(['middleware'=>['auth','is_setting_completed','is_block']], function(){

	Route::get('/account','AccountController@read');

	Route::post('/account','AccountController@update');

	


});




Route::group(['middleware'=>['auth','is_setting_completed','is_account_completed','is_block']], function(){

	
	Route::get('/accounts','AccountController@view');

	Route::get('/home', 'HomeController@index')->name('home');

	

	Route::get('/invest', 'InvestController@read');

	Route::post('/invest', 'InvestController@create');


	Route::get('/wallet', 'WalletController@read');

	Route::get('/transaction', 'TransactionController@read');

	Route::get('/downline','DownlineController@read');

	Route::get('/referral_bonus','DownlineController@readReferralBonus');

	Route::get('/testimony_bonus','DownlineController@readTestimonyBonus');

	Route::get('/reinvest/{capital_id}','InvestController@reinvest');

	Route::get('/request/capital/{capital_id}','RequestController@requestCapital');

	Route::get('/request/profit/{capital_id}','RequestController@readProfit');

	Route::get('/request/profit/cashout/{profit_id}','RequestController@requestProfit');

	Route::get('/request/profit/cashoutall/{capital_id}','RequestController@requestAllProfit');

	Route::get('/request/bonus/{bonus_id}','RequestController@requestBonus');

	Route::get('/invest/bonus/{bonus_id}','InvestController@investBonus');

	Route::get('/request/testimony/bonus/{bonus_id}','RequestController@requestTestimonyBonus');

	Route::get('/invest/testimony/bonus/{bonus_id}','InvestController@investTestimonyBonus');

	Route::get('/password/change', 'SettingController@showChangePasswordForm');

	Route::post('/password/change', 'SettingController@changePassword');

	Route::get('/news', 'NewsController@read');

	Route::get('/news/view/{news_id}', 'NewsController@view');

	Route::get('/testimony/view', 'TestimonyController@read');

	Route::get('/testimony/create', 'TestimonyController@showTestimonyForm');

	Route::post('/testimony/create', 'TestimonyController@create');

	

});


Route::get('/admin/login', 'Admin\Auth\LoginAdminController@showLoginForm');

Route::post('/admin/login', 'Admin\Auth\LoginAdminController@login');

//Route::get('/admin/register', 'Admin\Auth\RegisterController@showRegisterForm');




Route::post('/admin/register', 'Admin\Auth\RegisterController@register');

Route::group(['middleware'=>['auth:admin']], function(){

	Route::get('/admin/create_wallet', 'Admin\AdminWalletController@index');

	Route::post('/admin/create_wallet', 'Admin\AdminWalletController@create');

	Route::get('/admin/view_wallet', 'Admin\AdminWalletController@read');

	Route::get('/admin/delete_wallet/{wallet_id}', 'Admin\AdminWalletController@delete');


	Route::post('/admin/create_wallet', 'Admin\AdminWalletController@create')->middleware('superadmin');

	Route::get('/admin/register', 'Admin\Auth\LoginAdminController@showRegisterForm')->middleware('superadmin');

	Route::get('/admin/register_g', 'Admin\Auth\LoginAdminController@register')->middleware('superadmin');

	Route::post('/admin/logout', 'Admin\Auth\LoginAdminController@logout');

	Route::get('/admin/dashboard', 'Admin\DashboardController@index');

	Route::get('/admin/user/view/{id}','Admin\UserController@view');

	Route::get('/admin/user/block/{id}','Admin\UserController@block');

	Route::get('/admin/user/unblock/{id}','Admin\UserController@unblock');

	Route::get('/admin/user/delete/{id}','Admin\UserController@delete');

	Route::get('/admin/user','Admin\UserController@index');

	Route::get('/admin/config','Admin\SiteConfigController@showConfigForm');

	Route::post('/admin/config','Admin\SiteConfigController@updateConfig');

	Route::get('/admin/investment','Admin\InvestmentController@index');

	Route::get('/admin/investment/delete/{capital_id}','Admin\InvestmentController@delete');

	Route::get('/admin/investment/confirm/{capital_id}','Admin\InvestmentController@confirm');

	Route::get('/admin/profit','Admin\ProfitController@index');

	Route::get('/admin/profit/view/{capital_id}','Admin\ProfitController@view');

	Route::get('/admin/profit/payment/automate/{profit_id}','Admin\ProfitController@automatePayment');

	Route::get('/admin/profit/payment/con_trans/{profit_id}','Admin\ProfitController@confirmProfitTransfer');

	Route::get('/admin/profit/payment/con_trans_all/{capital_id}','Admin\ProfitController@confirmProfitTransferAll');

	Route::get('/admin/profit/payment/automateall/{capital_id}','Admin\ProfitController@automateAllPayment');

	Route::get('/admin/request/capital','Admin\RequestController@readCapitalRequests');

	Route::get('/admin/request/profit','Admin\RequestController@readProfitRequests');

	Route::get('/admin/request/capital/automate/{capital_id}','Admin\RequestController@automateCapitalPayment');

	Route::get('/admin/request/capital/con_trans/{capital_id}','Admin\RequestController@confirmCapitalTransfer');

	Route::get('/admin/request/bonus','Admin\RequestController@readBonusRequests');

	Route::get('/admin/request/bonus/automate/{bonus_id}','Admin\RequestController@automateBonusPayment');

	Route::get('/admin/request/bonus/con_trans/{bonus_id}','Admin\RequestController@confirmBonusTransfer');

	Route::get('/admin/testimony','Admin\TestimonyController@read');

	Route::get('/admin/testimony/approve/{id}','Admin\TestimonyController@approve');

	Route::get('/admin/testimony/approvebonus','Admin\TestimonyController@approvebonus');

	Route::get('/admin/news','Admin\NewsController@read');

	Route::get('/admin/news/view/{news_id}','Admin\NewsController@view');

	Route::get('/admin/news/create','Admin\NewsController@showNewsForm');

	Route::post('/admin/news/create','Admin\NewsController@create');

	Route::get('/admin/news/delete/{news_id}','Admin\NewsController@delete');

	Route::get('/admin/inbox/delete/{message_id}','Admin\InboxController@delete');

	Route::get('/admin/stats','Admin\StatsController@read');

	Route::get('/admin/inbox','Admin\InboxController@read');

	Route::get('/admin/inbox/view/{id}','Admin\InboxController@view');

	Route::get('/admin/manualcron','Admin\SiteConfigController@manualcron')->middleware('superadmin');

	//Route::post('/admin/inbox/reply','Admin\InboxController@reply');





	});























