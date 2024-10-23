<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller; // Controller 클래스 임포트
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Exception;

class GoogleLoginController extends Controller
{
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        try {
            $user = Socialite::driver('google')->stateless()->user();
            $findUser = User::where('google_id', $user->id)->orWhere('email', $user->email)->first();

            if ($findUser) {
                Auth::login($findUser);
                Auth::logoutOtherDevices($findUser->password);
                return redirect()->intended('dashboard');
            } else {
                $newUser = User::create([
                    'name' => $user->name ?? 'Unknown User', // null일 경우 기본 값 지정
                    'email' => $user->email,
                    'google_id' => $user->id,
                    'password' => Hash::make(uniqid()), // 비밀번호는 사용되지 않음
                ]);

                Auth::login($newUser);
                return redirect()->intended('/');
            }
        } catch (Exception $e) {
            return redirect('/login')->withErrors(['error' => 'Google 로그인에 실패했습니다. 다시 시도해 주세요.']);
        }
    }
}
