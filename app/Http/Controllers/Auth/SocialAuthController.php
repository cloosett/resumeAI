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

    public function authGitHub()
    {
        $gitUser = Socialite::driver('github')->stateless()->user();

        $existingUser = User::where('github_id', $gitUser->getId())->first();
        if ($existingUser) {
            auth()->login($existingUser);
        } else {
            $newUser = User::create([
                'name' => $gitUser->name,
                'email' => $gitUser->getEmail(),
                'github_id' => $gitUser->getId(),
                'profile_picture' => $gitUser->avatar,
                'password' => '',
            ]);

            auth()->login($newUser);
        }

        return redirect()->intended('/');
    }
}
