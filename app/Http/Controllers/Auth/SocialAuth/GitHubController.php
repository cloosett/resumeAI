<?php

namespace App\Http\Controllers\Auth\SocialAuth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class GitHubController extends Controller
{
    public function redirectTo()
    {
        return Socialite::driver('github')->stateless()->with(['prompt' => 'select_account'])->redirect();
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
                'password' => '',
            ]);

            $newUser->resume()->create([
                'profile_picture' => $gitUser->getAvatar(),
            ]);


            auth()->login($newUser);
        }

        return redirect()->intended('/');
    }
}
