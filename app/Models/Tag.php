<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Tag extends Model
{
    use HasFactory, HasTranslations;
    protected $fillable = ['name', 'status'];
    public $translatable = ['name'];

    public static function scopePublished($query)
    {
        return $query->where('status', 'published');
    }
    public static function updateOrCreateTag($tagName, $status)
    {
        // Шукаємо перший тег або створюємо новий
        $tag = self::first();

        if ($tag) {
            // Якщо тег знайдений, оновлюємо
            $tag->update([
                'name' => $tagName,
                'status' => $status,
            ]);
        } else {
            // Якщо тег не знайдений, створюємо новий
            self::create([
                'name' => $tagName,
                'status' => $status,
            ]);
        }
    }
}
