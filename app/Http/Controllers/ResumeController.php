<?php

namespace App\Http\Controllers;

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
        dd($request->all());
        // Отримуємо значення з форми
        $facebook = $request->input('facebook');
        $linkedin = $request->input('linkedin');
        $twitter = $request->input('twitter');
        $name = $request->input('name');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $education = $request->input('education');
        $skills = $request->input('skills');
        $languages = $request->input('languages');

        // Формуємо текст для запиту до OpenAI
        $text = "Резюме кандидата:\n";

        // Перевіряємо кожне поле і додаємо його в текст тільки якщо воно не пусте
        if ($name) $text .= "Ім'я: $name\n";
        if ($email) $text .= "Email: $email\n";
        if ($phone) $text .= "Телефон: $phone\n";
        if ($education) $text .= "Освіта: $education\n";
        if ($skills) $text .= "Навички: $skills\n";
        if ($languages) $text .= "Мови: $languages\n";
        if ($facebook) $text .= "Facebook: $facebook\n";
        if ($linkedin) $text .= "LinkedIn: $linkedin\n";
        if ($twitter) $text .= "Twitter: $twitter\n";
        $enhancedText = $this->openAIService->openai($text);

        if ($enhancedText) {
            return response()->json(['enhanced_text' => $enhancedText]);
        }

        return response()->json(['error' => 'Не вдалося покращити текст резюме'], 500);
    }

}
