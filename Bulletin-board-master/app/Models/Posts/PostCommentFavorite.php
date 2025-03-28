<?php

namespace App\Models\Posts;

use Illuminate\Database\Eloquent\Model;

class PostCommentFavorite extends Model
{
    protected $table = 'post_comment_favorites';

    protected $fillable = [
        'user_id',
        'post_comment_id',
    ];

    //リレーション関係
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function post_comment()
    {
        return $this->belongsTo(PostComment::class);
    }
}
