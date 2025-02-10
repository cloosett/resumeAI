<?php

namespace App\Http\Controllers;

use Endroid\QrCode\Writer\PngWriter;
use Illuminate\Http\Request;
use PragmaRX\Google2FA\Google2FA;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class TwoFactorController extends Controller
{
    public function enableTwoFactor(Request $request)
    {
        $user = auth()->user();
        $google2fa = new Google2FA();

        $secret = $user->generateGoogle2faSecret();

        $user->google2fa_secret = $secret;
        $user->google2fa_enabled = true;
        $user->save();

        $uri = $google2fa->getQRCodeUrl(
            config('app.name'),
            $user->email,
            $secret
        );

        $qrCodeUrl = "https://api.qrserver.com/v1/create-qr-code/?size=200x200&data=" . urlencode($uri);
        return view('2fa.enable', compact('uri', 'secret', 'qrCodeUrl'));
    }


    // Перевіряємо код 2FA
    public function verifyTwoFactor(Request $request)
    {
        $user = auth()->user();
        $google2fa = new Google2FA();

        // Перевіряємо код
        $valid = $google2fa->verifyKey($user->google2fa_secret, $request->input('token'));

        if ($valid) {
            return redirect()->route('home');
        } else {
            return back()->withErrors(['token' => 'Неправильний код. Спробуйте ще раз.']);
        }
    }

    public function confirmTwoFactor()
    {
        return view('2fa.confirm');
    }
}
