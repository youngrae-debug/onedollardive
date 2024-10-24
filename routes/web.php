<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\Auth\GoogleLoginController;
use App\Http\Controllers\PayPalController;
use Srmklive\PayPal\Services\PayPal as PayPalClient;
use Illuminate\Support\Facades\Session;

//Route::get('/', function () {
//    return view('welcome'); // 나중에 포트폴리오 홈페이지로 변경할 예정
//})->name('welcome');
//
//Route::get('/about', function () {
//    return view('about'); // About 페이지
//});
//
//Route::get('/marketinsights', function () {
//    return view('marketinsights'); // Market Insights 페이지
//});
//
//Route::get('/subscription', function () {
//    return view('subscription'); // Subscription 페이지
//});
//
//
//Route::get('/subscribe/success', [PayPalController::class, 'success'])->name('paypal.success');
//Route::get('/subscribe/cancel', [PayPalController::class, 'cancel'])->name('paypal.cancel');
//
//// 페이팔
//
//
//
//// 구독 경로에서 auth 미들웨어 제거하고 컨트롤러에서 직접 확인
//Route::post('/subscribe', [SubscriptionController::class, 'subscribe'])->name('subscribe');
//Route::post('/paypal/subscribe', [PayPalController::class, 'subscribe'])->name('paypal.subscribe');
//
//// Google 로그인
//Route::get('auth/google', [GoogleLoginController::class, 'redirectToGoogle'])->name('google.login');
//Route::get('auth/google/callback', [GoogleLoginController::class, 'handleGoogleCallback']);
//
//
//Route::get('/paypal/test', function () {
//    $provider = new PayPalClient;
//    $provider->setApiCredentials(config('paypal'));
//
//    try {
//        $accessToken = $provider->getAccessToken();
//        dd($accessToken);
//    } catch (\Exception $e) {
//        dd($e->getMessage());
//    }
//});


Route::get('/', function () {
    return view('welcome'); // 나중에 포트폴리오 홈페이지로 변경할 예정
})->name('welcome');

Route::get('/about', function () {
    return view('about'); // About 페이지
});

Route::get('/marketinsights', function () {
    return view('marketinsights'); // Market Insights 페이지
});

Route::get('/subscription', function () {
    return view('subscription'); // Subscription 페이지
});

Route::post('/logout', function (Request $request) {
    Auth::logout();
    Session::invalidate();
    Session::regenerateToken();
    return redirect('/'); // 리다이렉트 경로 설정
})->name('logout');

// 구독 경로에서 auth 미들웨어 제거하고 컨트롤러에서 직접 확인
Route::post('/subscribe', [SubscriptionController::class, 'subscribe'])->name('subscribe');

// Google 로그인
Route::get('auth/google', [GoogleLoginController::class, 'redirectToGoogle'])->name('google.login');
Route::get('auth/google/callback', [GoogleLoginController::class, 'handleGoogleCallback']);

