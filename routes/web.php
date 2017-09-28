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
/*
Route::get('auth/login', 'Auth\LoginController@getLogin');
Route::post('auth/login', 'Auth\LoginController@postLogin');
Route::get('auth/logout','Auth\LoginController@getLogout');

// Now for registration
Route::get('auth/register', 'RegisterController@getRegister');
Route::post('auth/register','RegisterController@postRegister');*/

Route::get('blog/{slug}', ['as'=>'blog.single', 'uses'=>'BlogController@getSingle'])->where('slug', '[\w\d\_\-]+');
Route::get('blog', ['uses'=>'BlogController@getIndex', 'as'=>'blog.index']);
Route::get('about', 'PagesController@getAbout');
Route::get('contact', 'PagesController@getContact');
Route::post('contact', 'PagesController@postContact');
Route::get('/', 'PagesController@getIndex');
Route::get('/search', [
    'as' => 'api.search',
    'uses' => 'Api\SearchController@search'
]);

Route::resource('posts', 'PostController');


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/users/logout', 'Auth\LoginController@userLogout')->name('user.logout');




// Routes for Admin Controller   

Route::get('/admin/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
Route::post('/admin/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
Route::get('/admin/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
Route::get('/admin', 'AdminController@index')->name('admin');


// Reset  for reset password 
Route::get('/admin/password/reset', 'Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
Route::post('/admin/password/email', 'Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
Route::get('/admin/password/reset/{token}', 'Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');
Route::post('/admin/password/reset', 'Auth\AdminResetPasswordController@reset');

Route::resource('categories', 'CategoryController', ['except'=>['create']]);
Route::resource('tags', 'TagController', ['except'=>['create']]);

// Comments 
Route::post('comments/{post_id}', ['uses'=>'CommentController@store', 'as'=>'comments.store']);


Route::get('search', function(){
    return " Google is hello";
});
