<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', 'PagesController@index')->name('index');
Route::get('/collect/{id}', 'PagesController@collect')->name('collect');
Route::get('/status', 'PagesController@status')->name('status');
Route::get('/logout', 'PagesController@logout')->name('user.logout');


Route::group(['prefix' => 'pages'], function () {
    Route::get('/books/single/{id}', 'Frontend\BooksController@show')->name('pages.books.single');
    Route::get('/books', 'Frontend\BooksController@index')->name('pages.books');
    //Route::get('/pages/books/single', 'PagesController@bookSingle')->name('pages.books.single');
    Route::get('/contact', 'PagesController@contact')->name('pages.contact');
    Route::get('/news/single', 'PagesController@newsSingle')->name('pages.news.single');
    Route::get('/webpages/single/{id}', 'Frontend\WebPagesController@show')->name('pages.webpages.single');
});

//Route::get('/dashboard', 'Backend\AdminController@index')->name('admin.dashboard');

Auth::routes();

Route::group(['prefix' => 'admin'], function () {
    Route::get('/', 'Backend\DashboardController@index')->name('admin.index');
    Route::resource('downloads', 'Backend\DownloadController', ['names' => 'admin.downloads']);
    Route::get('downloads/{uuid}/download', 'Backend\DownloadController@download')->name('admin.downloads.download');
    Route::resource('roles', 'Backend\RolesController', ['names' => 'admin.roles']);
    Route::resource('users', 'Backend\UsersController', ['names' => 'admin.users']);
    Route::get('orders/status', 'Backend\OrderController@approve')->name('admin.orders.status');
    Route::resource('orders', 'Backend\OrderController', ['names' => 'admin.orders']);
    Route::resource('admins', 'Backend\AdminsController', ['names' => 'admin.admins']);
    Route::resource('books', 'Backend\BooksController', ['names' => 'admin.books']);
    Route::resource('sliders', 'Backend\SliderController', ['names' => 'admin.sliders']);
    Route::get('libraries/create_about', 'Backend\LibraryProfileController@create_about_us')->name('admin.libraries.create_about_us');
    Route::get('libraries/edit_about/{id}', 'Backend\LibraryProfileController@edit_about')->name('admin.libraries.edit_about_us');
    Route::post('libraries/store_about', 'Backend\LibraryProfileController@store_about')->name('admin.libraries.store_about_us');
    Route::post('libraries/update_about/{id}', 'Backend\LibraryProfileController@update_about')->name('admin.libraries.update_about_us');

    Route::resource('libraries', 'Backend\LibraryProfileController', ['names' => 'admin.libraries']);
    Route::resource('web_pages', 'Backend\WebPagesController', ['names' => 'admin.web_pages']);


    // Login Routes
    Route::get('/login', 'Backend\Auth\LoginController@showLoginForm')->name('admin.login');
    Route::post('/login/submit', 'Backend\Auth\LoginController@login')->name('admin.login.submit');

    // Logout Routes
    Route::get('/logout/submit', 'Backend\Auth\LoginController@logout')->name('admin.logout.submit');

    // Forget Password Routes
    Route::get('/password/reset', 'Backend\Auth\ForgetPasswordController@showLinkRequestForm')->name('admin.password.request');
    Route::post('/password/reset/submit', 'Backend\Auth\ForgetPasswordController@reset')->name('admin.password.update');
});