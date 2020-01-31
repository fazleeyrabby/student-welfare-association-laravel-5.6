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

Route::get('/','FrontendController@index');


Route::get('/advisor','FrontendController@advisor');
Route::get('/executive-member','FrontendController@member');
Route::get('/x-member','FrontendController@x_member');
Route::get('/mbr-first','FrontendController@mbr_first');
Route::get('/mbr-by-yr/{id}','FrontendController@mbr_by_yr');
Route::get('/members/{id}','FrontendController@member_by_id');
Route::get('/blog-details','FrontendController@blog_details');
// Route::get('/blog-details','FrontendController@blog_details');
Route::get('/glry','FrontendController@gallery_page');
Route::get('/cnstuon','FrontendController@cnstuon_page');
Route::get('/blood-doner','FrontendController@blood_doner');
Route::get('/bldgrpsrc','FrontendController@bldgrp_src');
Route::get('/notice-detail/{id}','FrontendController@notice_detail');

Route::get('/latest-journal','FrontendController@index');
Route::get('search/','FrontendController@search');
Route::get('journal-category/{id}','FrontendController@journal_category');
Route::get('blog-by-category/{id}','FrontendController@blog_by_category');
Route::get('view-article/{id}','FrontendController@single_article');
Route::get('view-userjournal/{id}','FrontendController@single_journal');
// pdf
Route::get('dynamic-pdf/{id}','DynamicPDFController@get_article_data_by_id');
Route::get('dynamic-pdf-journal/{id}','DynamicPDFController@get_journal_data_by_id');
Route::get('current','FrontendController@journal_current');
Route::get('archive','FrontendController@journal_archive');
Route::get('about-info','FrontendController@about_detail');
// user registration
Route::get('/registration','UserController@create');
Route::post('/registration','UserController@store_user_info');

// password bcrypt
// Route::get('pass/{p}',function($p){
//     return bcrypt($p);
// });

// customer login and logout 
Route::get('/user-login','UserController@user_login');
Route::post('/user-login','UserController@user_login_check');
Route::get('/user-dashboard','UserController@user_dashboard');
Route::post('/userinfo-update','UserController@userinfo_update');
Route::get('/my-journal/{id}','UserController@get_myjournal');
Route::post('/transaction/{id}','UserController@get_transaction');
Route::get('journal-category/view-journal/{id}','UserController@singleJournal');
Route::get('journal-category/view-archive/{id}','UserController@singlearchive');
Route::get('/user-logout','UserController@user_logout');
// user post journal
Route::resource('/journal','JournalController');
Route::get('contact-us','PageController@contactUs');
Route::post('contact-us','PageController@storeContact');

Route::match(['get','post'],'/admin','adminController@login');
Auth::routes();
Route::group(['middleware'=>['auth']], function () {
	Route::get('/admin/dashboard','adminController@dashboard');
	Route::get('/admin/journal','adminController@getuser_journal');
	Route::get('/admin/register-user','adminController@getregisteruser_info');
	Route::get('/admin/register-user/{id}','adminController@singleregisteruser_info');
	Route::post('/admin/register-user/delete/{id}','adminController@deleteRegisteruser_info');
	Route::post('/admin/user-journal/delete/{id}','adminController@deleteuserJournal_info');
	Route::get('/admin/unactive-user/{id}','adminController@unactive_user');
	Route::get('/admin/active-user/{id}','adminController@active_user');
	Route::get('/admin/register-user/delete/{id}','adminController@registeruserDelete');
	Route::resource('/category','CategoryController');
	Route::resource('/member-of-year','MemberOfYearController');
	Route::resource('/slider','sliderController');
	Route::resource('/article','ArticleController');
	Route::resource('/about','AboutController');
	Route::resource('/member','MemberController');
	Route::resource('/gallery','GalleryController');
	Route::resource('/constitution','ConstitutionController');
	Route::resource('/current-notice','CurrentNoticeController');
	Route::resource('/notice','NoticeController');
	Route::get('/logout','adminController@logout');
});
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('cache:clear');
    //$exitCode = Artisan::call('optimize');
    //$exitCode = Artisan::call('route:cache');
    $exitCode = Artisan::call('route:clear');
    $exitCode = Artisan::call('view:clear');
    $exitCode = Artisan::call('config:cache');
    return '<h1>Clear Config cleared</h1>';
});
// mail
// Route::get('/mail','mailController@index');
// Route::post('/postmail','mailController@postEmail');


 
