<?php

namespace App\Http\Controllers;

use App\Models\Resume;
use App\Services\OpenAIService;
use Illuminate\Http\Request;

class ResumeController extends Controller
{
    protected $openAIService;

    public function __construct(OpenAIService $openAIService)
    {
        $this->openAIService = $openAIService;
    }
    public function submitResume(Request $request)
    {

        // $validated = $request->validate([
        //    'facebook' => 'nullable|url',
        //    'linkedin' => 'nullable|url',
        //    'twitter' => 'nullable|url',
        //    'name' => 'required|string|max:255',
        //    'email' => 'required|email|max:255',
        //    'phone' => 'required|string|max:15',
        //    'education' => 'required|string',
        //    'skills' => 'required|string',
        //    'languages' => 'nullable|string',
        //    'profile_picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        // ]);

        $facebook = $request->input('facebook');
        $linkedin = $request->input('linkedin');
        $twitter = $request->input('twitter');
        $name = $request->input('name');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $location = $request->input('location');
        $education = $request->input('education');
        $skills = $request->input('skills');
        $languages = $request->input('languages');

        $text = "Резюме кандидата:\n";

        if ($name) $text .= "Ім'я: $name\n";
        if ($email) $text .= "Email: $email\n";
        if ($phone) $text .= "Телефон: $phone\n";
        if ($education) $text .= "Освіта: $education\n";
        if ($skills) $text .= "Навички: $skills\n";
        if ($location) $text .= "Локація: $location\n";
        if ($languages) $text .= "Мови: $languages\n";
        if ($facebook) $text .= "Facebook: $facebook\n";
        if ($linkedin) $text .= "LinkedIn: $linkedin\n";
        if ($twitter) $text .= "Twitter: $twitter\n";

        $enhancedText = $this->openAIService->openai($text);
        if ($enhancedText) {
            if ($request->hasFile('avatar')) {
                $profilePicture = $request->file('avatar');
                $profilePicturePath = $profilePicture->store('profile_pictures', 'public');
            }

            $resume = Resume::where('user_id', auth()->user()->id)->first();

            if ($resume) {
                $resume->update([
                    'name' => $name,
                    'email' => $email,
                    'phone' => $phone,
                    'linkedin' => $linkedin,
                    'twitter' => $twitter,
                    'facebook' => $facebook,
                    'education' => $education,
                    'skills' => $skills,
                    'languages' => $languages,
                    'location' => $location,
                    'profile_picture' => isset($profilePicturePath) ? $profilePicturePath : $resume->profile_picture, // Залишаємо старе фото, якщо нове не завантажено
                    'resume' => $enhancedText,
                ]);
            } else {
                $resume = Resume::create([
                    'name' => $name,
                    'email' => $email,
                    'phone' => $phone,
                    'linkedin' => $linkedin,
                    'twitter' => $twitter,
                    'facebook' => $facebook,
                    'education' => $education,
                    'skills' => $skills,
                    'languages' => $languages,
                    'location' => $location,
                    'profile_picture' => isset($profilePicturePath) ? $profilePicturePath : null,
                    'user_id' => auth()->user()->id,
                    'resume' => $enhancedText,
                ]);
            }

            return response()->json(['enhanced_text' => $enhancedText, 'resume' => $resume]);
        }

        return response()->json(['error' => 'Не вдалося покращити текст резюме'], 500);
    }

}
