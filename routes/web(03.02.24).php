<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});
Route::get('/addmember', function () {
    return view('add-new-member');
});
Route::get('/become', function () {
    return view('become-a-member');
});
Route::get('/audio', function () {
    return view('audio');
});
Route::get('/volunteer', function () {
    return view('become-a-volunteer');
});
Route::get('/challan', function () {
    return view('challan_request');
});
Route::get('/change', function () {
    return view('change-your-volunteer');
});
Route::get('/changepassword', function () {
    return view('changepassword');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/deposit', function () {
    return view('deposit_details');
});
Route::get('/dharma', function () {
    return view('dharma_profile');
});
Route::get('/dharmasandheha', function () {
    return view('dharmasandheha');
});
Route::get('/divyangya', function () {
    return view('divyangya-serve-online-bookingform');
});
Route::get('/donar-details', function () {
    return view('donar-details');
});
Route::get('/donation', function () {
    return view('donation');
});
Route::get('/en-pani', function () {
    return view('en-pani');
});
Route::get('/goshala', function () {
    return view('goshala');
});
Route::get('/index', function () {
    return view('index');
});
Route::get('/kalakshepam', function () {
    return view('kalakshepam');
});
Route::get('/know', function () {
    return view('know-your-volunteer');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/maintenance', function () {
    return view('maintanence-historical-places');
});
Route::get('/my-profile', function () {
    return view('my-profile');
});
Route::get('/periya-thiruvandhadhi', function () {
    return view('periya-thiruvandhadhi');
});
Route::get('/publications', function () {
    return view('publications');
});
Route::get('/ramanuja-dd', function () {
    return view('ramanuja-dd-serve');
});
Route::get('/renewal', function () {
    return view('renewal');
});
Route::get('/rm-online', function () {
    return view('rm-online');
});
Route::get('/rmsm-delivery', function () {
    return view('rmsm-delivery');
});
Route::get('/rmsm-donation', function () {
    return view('rmsm-donation');
});
Route::get('/sanskrit', function () {
    return view('sanskrit-dravida-vedas');
});
Route::get('/sri-pancharatra', function () {
    return view('sri-pancharatra');
});
Route::get('/update', function () {
    return view('update_profile');
});
Route::get('/user-register', function () {
    return view('user_register');
});
Route::get('/user-login', function () {
    return view('login');
});
Route::get('/video', function () {
    return view('video');
});
Route::get('/volunteer-profile', function () {
    return view('volunteer-profile');
});