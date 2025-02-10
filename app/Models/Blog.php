<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Blog extends Model
{
    use HasFactory, HasTranslations;

    protected $fillable = [
        'title',
        'slug',
        'meta_title',
        'meta_description',
        'content',
        'author_id',
        'published_at',
        'image',
        'status'
    ];

    public $translatable = [
        'title',
        'meta_title',
        'meta_description',
        'content'
    ];

    public function scopePublished($query)
    {
        return $query->where('status', 'published');
    }

    // Відношення "Блог має багато коментарів"
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'author_id');
    }
}
