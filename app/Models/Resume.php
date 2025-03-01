<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resume extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'linkedin',
        'twitter',
        'facebook',
        'education',
        'skills',
        'languages',
        'profile_picture',
        'user_id'
    ];
}
