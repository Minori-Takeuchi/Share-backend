<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'comment',
        'user_id',
        'post_id',
    ];

    public static $rules = array(
        'comment' => 'required | max:120',
    );

    public function user()
    {
        return $this->BelongsTo(User::class);
    }

    public function posts()
    {
        return $this->BelongsTo(Post::class);
    }
}
