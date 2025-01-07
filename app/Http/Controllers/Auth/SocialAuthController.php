<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Laravel\Socialite\Facades\Socialite;

class SocialAuthController extends Controller
{
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
                'profile_picture' => $googleUser->getAvatar(),
                'password' => '',
            ]);

            auth()->login($newUser);
        }

        return redirect()->intended('/');
    }
}
