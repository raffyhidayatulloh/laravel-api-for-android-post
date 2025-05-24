<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'body',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public static function boot()
    {
        parent::boot();

        static::updating(function ($post) {
            $post->created_at = now(); // Update created_at dengan waktu sekarang
        });
    }
}
