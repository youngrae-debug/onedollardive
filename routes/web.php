<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubscriptionController;
use App\Http\Controllers\Auth\GoogleLoginController;

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

// 구독 경로에서 auth 미들웨어 제거하고 컨트롤러에서 직접 확인
Route::post('/subscribe', [SubscriptionController::class, 'subscribe'])->name('subscribe');

// Google 로그인
Route::get('auth/google', [GoogleLoginController::class, 'redirectToGoogle'])->name('google.login');
Route::get('auth/google/callback', [GoogleLoginController::class, 'handleGoogleCallback']);
