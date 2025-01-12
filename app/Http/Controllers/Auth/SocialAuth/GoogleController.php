<?php

namespace App\Http\Controllers\Auth\SocialAuth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class GoogleController extends Controller
{

    public function redirectTo()
    {
        return Socialite::driver('google')->stateless()->with(['prompt' => 'select_account'])->redirect();
    }
    public function authGoogle()
    {
        $googleUser = Socialite::driver('google')->stateless()->user();
        $existingUser = User::where('google_id', $googleUser->getId())->first();
        if ($existingUser) {
            auth()->login($existingUser);
        } else {
            $newUser = User::create([
                'name' => $googleUser->getName(),
                'email' => $googleUser->getEmail(),
                'google_id' => $googleUser->getId(),
                'password' => '',
            ]);

            $newUser->resume()->create([
                'profile_picture' => $googleUser->getAvatar(),
            ]);

            auth()->login($newUser);
        }

        return redirect()->intended('/');
    }
}
