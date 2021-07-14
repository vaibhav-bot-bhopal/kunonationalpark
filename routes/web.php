<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

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
// Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();


Route::get('language/{lang}', function ($lang) {
    Session::put('locale', $lang);
    return redirect()->back();
})->middleware('language');

Route::get('/', 'WelcomeController@index')->middleware('language');
Route::get('/news', 'NewscornerController@index')->middleware('language');
Route::get('/news-details/{slug}', 'NewscornerController@news_details')->name('news-details')->middleware('language');
Route::get('/gallery', 'GalleryController@index')->middleware('language');
Route::get('/gallery/2', 'GalleryController@page2')->middleware('language');
Route::get('/gallery/3', 'GalleryController@page3')->middleware('language');
Route::get('/contact', 'ContactusController@index')->middleware('language');

Route::group(['prefix' => 'superadmin', 'middleware' => ['auth', 'isSuperadmin', 'prevent-back-history']], function () {
    // For Super Admin Dashboard
    Route::get('/dashboard', 'SuperAdminController@index')->name('dashboard');
    Route::get('/role-edit/{id}', 'SuperAdminController@editUserRole')->name('editUserRole');
    Route::put('/role-update/{id}', 'SuperAdminController@updateUserRole')->name('updateUserRole');
    Route::delete('/role-delete/{id}', 'SuperAdminController@deleteUserRole')->name('deleteUserRole');
    Route::get('/changeuserstatus', 'SuperAdminController@changeUserStatus')->name('changeUserStatus');
});

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'isAdmin', 'prevent-back-history']], function () {
    // For English Language Dashboard
    Route::get('/en', 'HomeController@english')->name('admin-en');
    Route::post('/eng_news_create', 'HomeController@eng_news_create')->name('eng_news_create');
    Route::get('/eng_news_edit/{id}', 'HomeController@eng_news_edit')->name('eng_news_edit');
    Route::post('/eng_news_update/{id}', 'HomeController@eng_news_update')->name('eng_news_update');
    Route::delete('/eng_news_del/{id}', 'HomeController@eng_news_del')->name('eng_news_del');

    // For Hindi Language Dashboard
    Route::get('/hi', 'HomeController@hindi')->name('admin-hi');
    Route::post('/hin_news_create', 'HomeController@hin_news_create')->name('hin_news_create');
    Route::get('/hin_news_edit/{id}', 'HomeController@hin_news_edit')->name('hin_news_edit');
    Route::post('/hin_news_update/{id}', 'HomeController@hin_news_update')->name('hin_news_update');
    Route::delete('/hin_news_del/{id}', 'HomeController@hin_news_del')->name('hin_news_del');
});

Route::prefix('about')->group(function () {
    // For About Page
    Route::get('/introduction', 'AboutkunoController@introduction');
    Route::get('/history', 'AboutkunoController@history');
    Route::get('/significance', 'AboutkunoController@significance');
    Route::get('/forest-and-vegetation', 'AboutkunoController@forestandvegetation');
    Route::get('/biodiversity', 'AboutkunoController@biodiversity');
});

Route::prefix('tourist')->group(function () {
    // For Tourist Page
    Route::get('/location', 'TouristinformationController@location');
    Route::get('/how-to-reach', 'TouristinformationController@howtoreach');
    Route::get('/weather', 'TouristinformationController@weather');
    Route::get('/safari-zone', 'TouristinformationController@safarizone');
    Route::get('/excursions-and-charges', 'TouristinformationController@excursionsandcharges');
    Route::get('/points-of-interests', 'TouristinformationController@pointsofinterests');
    Route::get('/stay', 'TouristinformationController@stay');
    Route::get('/do-and-dont', 'TouristinformationController@doanddonts');
    Route::get('/safari-booking', 'TouristinformationController@safaribooking');
});

Route::prefix('park')->group(function () {
    // For Park Page
    Route::get('/administrative-body', 'ParkmanagementController@administrativebody');
    Route::get('/goals-and-objectives', 'ParkmanagementController@goalsandobjectives');
    Route::get('/other-activities', 'ParkmanagementController@otheractivities');
    Route::get('/rti', 'ParkmanagementController@rti');
    Route::get('/contact-us', 'ParkmanagementController@contactus');
});
