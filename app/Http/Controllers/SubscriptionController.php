<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subscription;
use Illuminate\Support\Facades\Auth;

class SubscriptionController extends Controller
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
    
        // 새로운 구독 생성
        $subscription = $user->subscription ?: new Subscription();
        $subscription->user_id = $user->id;
        $subscription->plan = $request->input('plan', 'basic'); // 기본은 'basic' 플랜
        $subscription->expires_at = now()->addMonth(); // 1개월 동안 유효
        $subscription->save();
    
        return redirect()->route('welcome')->with('message', 'Subscription successful!');
    }
    
    
}
