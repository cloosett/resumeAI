<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\App;

class LanguageHelper
{
    /**
     * Автоматично визначає мову в URL і додає префікс.
     *
     * @return string
     */
    const LOCALES = ['en', 'uk'];
    public static function setLanguageFromUrl()
    {
        $locale = request()->segment(1, ''); // Отримуємо перший сегмент URL
        if ($locale && in_array($locale, self::LOCALES)) {
            App::setLocale($locale);  // Встановлюємо локаль
            return $locale;  // Повертаємо локаль як префікс
        }
        return '';  // Якщо немає префікса, повертаємо порожній рядок
    }

}
