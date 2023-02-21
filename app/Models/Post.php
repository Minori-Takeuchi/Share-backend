<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'content',
        'user_id',
    ];

    public static $rules = array(
        'content' => 'required | max:120',
    );

    public static function boot()
    {
        parent::boot();
        static::deleting(function ($post) {
            $post->comments()->delete();
        });
    }

    public function user()
    {
        return $this->BelongsTo(User::class);
    }
    public function likes()
    {
        return $this->hasMany(Like::class);
    }
    public function comments()
    {
        return $this->hasMany(Comment::class,'post_id','id');
    }
}