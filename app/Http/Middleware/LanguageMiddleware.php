<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
class LanguageMiddleware
{
    /**
     * Обробляє вхідний запит.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // Отримуємо перший сегмент URL, який буде локаллю
        $locale = $request->segment(1);

        // Якщо це допустима локаль, встановлюємо її
        if (in_array($locale, config('app.locales'))) {
            App::setLocale($locale);
            Session::put('locale', $locale);  // Зберігаємо локаль в сесії
        } else {
            // Якщо локаль не вказана, використовуємо локаль за замовчуванням
            App::setLocale(config('app.locale'));
        }

        return $next($request);
    }
}
