<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subscription;
use Illuminate\Support\Facades\Auth;
use Srmklive\PayPal\Services\PayPal as PayPalClient;

class PayPalController extends Controller
{
    public function subscribe(Request $request)
    {
        // 로그인 확인
        if (!Auth::check()) {
            return redirect()->route('welcome')->with('message', 'You need to login to subscribe.');
        }
    
        $user = Auth::user();
    
        // 사용자가 이미 구독했는지 확인하고, 만료되지 않았는지 확인
        if ($user->subscription && $user->subscription->expires_at > now()) {
            return redirect()->route('welcome')->with('message', 'You are already subscribed.');
        }
    
        // // PayPal 클라이언트 초기화
        // $provider = new PayPalClient;
        // $provider->setApiCredentials(config('paypal'));
        // try {
        //     $accessToken = $provider->getAccessToken();
        //     $provider->setAccessToken($accessToken);
        // } catch (\Exception $e) {
        //     \Log::error('PayPal Access Token Error:', ['error' => $e->getMessage()]);
        //     return redirect()->route('welcome')->with('message', 'Failed to connect to PayPal. Please try again later.');
        // }
    
        // // 구독 생성 요청
        // try {
        //     $response = $provider->createSubscription([
        //         'plan_id' => env('PAYPAL_PLAN_ID'),
        //         'subscriber' => [
        //             'name' => [
        //                 'given_name' => $user->name,
        //                 'surname' => ''
        //             ],
        //             'email_address' => $user->email
        //         ],
        //         'application_context' => [
        //             'brand_name' => config('app.name'),
        //             'return_url' => route('paypal.success'),
        //             'cancel_url' => route('paypal.cancel')
        //         ]
        //     ]);
        // } catch (\Exception $e) {
        //     \Log::error('PayPal API Exception:', [
        //         'error' => $e->getMessage(),
        //         'trace' => $e->getTraceAsString()
        //     ]);
        //     return redirect()->route('welcome')->with('message', 'An error occurred while connecting to PayPal. Please try again later.');
        // }
    
        // // PayPal 응답 로그 기록
        // \Log::info('PayPal Subscription Response:', ['response' => $response]);
    
        // // 응답 상태 확인
        // if (isset($response['status']) && $response['status'] === 'APPROVAL_PENDING') {
        //     foreach ($response['links'] as $link) {
        //         if ($link['rel'] === 'approve') {
        //             return redirect()->away($link['href']);
        //         }
        //     }
        // }
    
        // // PayPal 오류 처리
        // if (isset($response['error'])) {
        //     \Log::error('PayPal Subscription Error:', (array) $response);
        //     $errorMessage = $response['error_description'] ?? 'An error occurred during the PayPal subscription process.';
        //     return redirect()->route('welcome')->with('message', 'PayPal Error: ' . $errorMessage);
        // }
        
        // // 구독 실패 시 전체 응답 로그 기록
        // \Log::error('PayPal Subscription Failed:', [
        //     'response' => $response,
        //     'status_code' => $response['status_code'] ?? 'N/A',
        //     'details' => isset($response['details']) ? $response['details'] : 'No additional details provided.'
        // ]);
        // 새로운 구독 생성
        $subscription = $user->subscription ?: new Subscription();
        $subscription->user_id = $user->id;
        $subscription->plan = $request->input('plan', 'basic'); // 기본은 'basic' 플랜
        $subscription->expires_at = now()->addMonth(); // 1개월 동안 유효
        $subscription->save();
        return redirect()->route('welcome')->with('message', 'Failed to create PayPal subscription. Please check your PayPal settings and try again.');
    }

    public function success(Request $request)
    {
        // PayPal 구독 성공 후 처리 로직
        $user = Auth::user();
        $subscription = $user->subscription ?: new Subscription();
        $subscription->user_id = $user->id;
        $subscription->plan = 'basic'; // 기본은 'basic' 플랜
        $subscription->expires_at = now()->addMonth(); // 1개월 동안 유효
        $subscription->save();
    
        return redirect()->route('welcome')->with('message', 'Subscription successful!');
    }

    public function cancel()
    {
        return redirect()->route('welcome')->with('message', 'Subscription was cancelled.');
    }
}
