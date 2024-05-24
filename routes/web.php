<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Request;

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


Route::group(['middleware' => 'restrict.access'], function () {
    
    Route::get('/', function () {
    return view('index');
    });
    Route::get('/audio', function ()  {
        return view('audio');
    });
    Route::get('/changepassword/{id?}', function ($id = null) {
        return view('changepassword', ['id' => $id]);
    });
    Route::get('/contact', function () {
        return view('contact');
    });
    Route::post('donation-billing', function () {
        return view('donation_billing');
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
    Route::get('/service/{id}', function () {
        return view('service-content');
    });
    Route::get('/kalakshepam', function () {
        return view('kalakshepam');
    });
    Route::get('/course/{id}', function () {
        return view('kalakshepam_details');
    });
    Route::get('/lesson/{id}', function () {
        return view('lesson_aud');
    });
    Route::get('/login', function () {
        return view('login');
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
    Route::get('/rm-online', function () {
        return view('rm-online');
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
    Route::get('/ramanuja-dd-serve', function () {
        return view('ramanuja-dd-serve');
    });
    Route::get('/divyangya', function () {
        return view('divyangya-serve-online-bookingform');
    });
    Route::get('/sri-pancharatra', function () {
        return view('sri-pancharatra');
    });
    Route::get('/goshala', function () {
        return view('goshala');
    });
    Route::get('/my-account', function () {
        return view('my-account');
    });
    Route::get('/otp-verify', function () {
        return view('otp-verify');
    });
    Route::get('/forgot-password', function () {
        return view('forgotpassword');
    });
    Route::get('/complaint', function () {
        return view('complaint');
    });
    Route::get('/approve-request', function () {
        return view('approve_request_view');
    })->name('approve-request');
    Route::get('/thread/{id}', function ($id) {
        return view('thread_rply',['id'=>$id]);
    });
    Route::get('/details/{id}', function ($id) {
        return view('kalakshepam_details',['id'=>$id]);
    });
    Route::get('/about', function () {
        return view('about');
    });
    Route::get('/successstory', function () {
        return view('successstory');
    });
    Route::get('/faq', function () {
        return view('faq');
    });
    Route::get('/submit-success-stroy', function () {
        return view('submit-success-stroy');
    });
    Route::get('/gnanakaithaa', function () {
        return view('gnanakaithaa');
    });
    Route::get('/edit_horo', function () {
        return view('edit_horo');
    });
    Route::get('/disclaimer', function () {
        return view('disclaimer');
    });
    Route::get('/privacy-policy', function () {
        return view('privacy-policy');
    });
    Route::get('/terms-conditions', function () {
        return view('terms-conditions');
    });
    Route::get('/lakshimi_profile', function () {
        return view('lakshimi_profile');
    });
    Route::get('/inbox', function () {
        return view('personalized_message');
    });
    Route::get('/my-matrimony', function () {
        return view('my-matrimony');
    });
    Route::get('/view_profile/{id}', function ($id) {
        return view('view_profile',['id' => $id]);
    });
    Route::get('/message/{id}', function ($id) {
        return view('send-message',['id' => $id]);
    });
    Route::get('/applycourse/{id}', function ($id) {
        return view('sri-pancharatra', ['id' => $id]);
    });
    Route::get('/sent', function () {
        return view('message_inbox');
    });
    Route::get('/inbox', function () {
        return view('personalized_message');
    });
    Route::get('/rm-online-audio/{id}', function () {
        return view('muktabhogavali');
    });
    Route::get('/rm-online-video/{id}', function () {
        return view('muktabhogavali-video');
    });
    Route::get('/rm-online-audio', function () {
        return view('rm-online');
    });
    Route::get('/rm-online-video', function () {
        return view('rm-online-video');
    });
    Route::get('/search-links', function () {
        return view('search-links');
    });
    Route::get('/rply/{id}', function ($id) {
        return view('rply',['id' => $id]);
    });
    Route::get('/lakshmi-home', function () {
        return view('lakshmi-home');
    });
    Route::post('/payment-final', function () {
        // dd($request->all());
        return view('payment-success');
    });
    Route::get('/testpayment', function () {
        // $serverIp = Request::server('SERVER_ADDR');
        // dd($serverIp);
        return view('testpayment');
    });
    Route::get('/dharma', function () {
        return view('dharma_profile');
    });
    // Route::get('/dharmasandheha', function () {
    //     return view('dharmasandheha');
    // });

    Route::get('/dharmasandheha/{id?}', function ($id = null) {
        if (request()->has('device_id')) {
            $device_id = request('device_id');
        } else {
            $device_id = 1;
        }
        $token = request('token');
        if ($id !== null && is_numeric($id)) {
            return view('dharmasandheha', ['id' => $id, 'device_id' => $device_id, 'token' => $token]);
        } else {
            return view('dharmasandheha', ['id' => null, 'device_id' => null, 'token' => $token]);
        }
    });

    Route::get('/wasted', function () {
        return view('not-found');
    });

    
    Route::get('/addmember', function () {
    return view('add-new-member');
    });
    Route::get('/challan', function () {
        return view('challan_request');
    });
    Route::get('/become-member', function () {
        return view('become-a-member');
    });
    Route::get('/change', function () {
        return view('change-your-volunteer');
    });
    Route::get('/volunteer', function () {
        return view('become-a-volunteer');
    });
    Route::post('/billing-details', function () {
        return view('donar-details');
    });
    Route::get('/renewal', function () {
        return view('renewal');
    });
    Route::get('/delivery-details', function () {
        return view('delivery_details');
    });
    Route::get('/volunteer-profile', function () {
        return view('volunteer-profile');
    });
    Route::get('/view-member', function () {
        return view('view-member');
    });
    Route::get('/depository_details', function () {
        return view('depository_details');
    });
    
    Route::get('/courses', function () {
    return view('kalakshepam_projects');
});
    
});

