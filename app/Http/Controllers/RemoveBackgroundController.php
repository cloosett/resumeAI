<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class RemoveBackgroundController extends Controller
{
    public function index()
    {
        return view('remove');
    }

//    public function removeBackground(Request $request)
//    {
//        $request->validate([
//            'image_file' => 'required|image',
//        ]);
//
//        $image = $request->file('image_file');
//
//        // Створюємо форму для передачі файлу на API
//        $response = Http::withHeaders([
//            'X-Api-Key' => 'd369aa13f9152ee2e74994f23dd6fddf59ee63fd', // Замість 'YOUR_API_KEY_HERE' ваш власний ключ API
//        ])
//            ->attach(
//                'image_file', file_get_contents($image->getPathname()), $image->getClientOriginalName()
//            )
//            ->post('https://sdk.photoroom.com/v1/segment');
//
//        if ($response->successful()) {
//            $imageContent = $response->body();
//
//            $extension = 'png';
//            $fileName = 'background_removed.' . $extension;
//
//            return response($imageContent, 200)
//                ->header('Content-Type', 'image/png')
//                ->header('Content-Disposition', 'attachment; filename="' . $fileName . '"');
//        } else {
//            return response()->json(['error' => 'Unable to process the image.'], 500);
//        }
//    }

}
