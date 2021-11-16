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

Auth::routes();


Route::get('language/{lang}', function ($lang) {
    Session::put('locale', $lang);
    return redirect()->back();
})->middleware('language');

Route::match(['get', 'post'], '/logout', 'Auth\LoginController@logout')->name('logout');

Route::get('/', 'WelcomeController@index')->middleware('language');
Route::get('/news', 'NewscornerController@index')->middleware('language');
Route::get('/news-details/{slug}', 'NewscornerController@news_details')->name('news-details')->middleware('language');
Route::get('/gallery', 'GalleryController@index')->middleware('language');
Route::get('/gallery/2', 'GalleryController@page2')->middleware('language');
Route::get('/gallery/3', 'GalleryController@page3')->middleware('language');
Route::get('/contact', 'ContactusController@index')->middleware('language');

Route::group(['prefix' => 'superadmin', 'middleware' => ['auth', 'isSuperadmin', 'prevent-back-history']], function () {
    // Account Settings
    Route::get('profile', 'SettingsController@index')->name('suadmin.profile');
    Route::match(['get', 'put'], 'profile-update', 'SettingsController@updateProfile')->name('suadmin.profile.update');
    Route::get('changePassword', 'SettingsController@changePassword')->name('suadmin.changePassword');
    Route::match(['get', 'put'], 'updatePassword', 'SettingsController@updatePassword')->name('suadmin.updatePassword');
    Route::get('adminChangePassword/{id}', 'SettingsController@adminChangePassword')->name('suadmin.changeadminpassword');
    Route::match(['get', 'put'], 'adminUpdatePassword/{id}', 'SettingsController@adminUpdatePassword')->name('suadmin.updateadminpassword');

    // For Super Admin Dashboard
    Route::get('/dashboard', 'SuperAdminController@index')->name('superadmin.dashboard');
    Route::get('/role-edit/{id}', 'SuperAdminController@editUserRole')->name('editUserRole');
    Route::match(['get', 'put'], '/role-update/{id}', 'SuperAdminController@updateUserRole')->name('updateUserRole');
    Route::delete('/role-delete/{id}', 'SuperAdminController@deleteUserRole')->name('deleteUserRole');
    Route::get('/changeuserstatus', 'SuperAdminController@changeUserStatus')->name('changeUserStatus');
});

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'isAdmin', 'prevent-back-history']], function () {
    // For Dashboard
    Route::get('/dashboard', 'DashboardController@index')->name('knp.dashboard')->middleware('language');
    Route::get('/newsShow', 'HomeController@newsShow')->name('knp.newsshow')->middleware('language');
    Route::match(['get', 'post'], '/newsAdd', 'HomeController@newsAdd')->name('knp.newsadd')->middleware('language');
    Route::get('/newsEdit/{id}', 'HomeController@newsEdit')->name('knp.newsedit')->middleware('language');
    Route::match(['get', 'post'], '/newsUpdate/{id}', 'HomeController@newsUpdate')->name('knp.newsupdate')->middleware('language');
    Route::delete('/newsDelete/{id}', 'HomeController@newsDelete')->name('knp.newsdelete')->middleware('language');

    // Account Settings
    Route::get('profile', 'SettingsController@index')->name('knp.admin.profile')->middleware('language');
    Route::match(['get', 'put'], 'profile-update', 'SettingsController@updateProfile')->name('knp.admin.profile.update')->middleware('language');
    Route::get('changePassword', 'SettingsController@changePassword')->name('knp.admin.changePassword')->middleware('language');
    Route::match(['get', 'put'], 'updatePassword', 'SettingsController@updatePassword')->name('knp.admin.updatePassword')->middleware('language');
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
