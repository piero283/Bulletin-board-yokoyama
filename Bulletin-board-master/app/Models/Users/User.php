<?php

namespace App\Models\Users;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\Post;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'username',
        'email',
        'password',
        'admin_role',
    ];

    //リレーション関係
    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function post_favorites()
    {
        return $this->hasMany(PostFavorite::class);
    }

    public function post_comments()
    {
        return $this->hasMany(PostComment::class);
    }

    public function post_comment_favorites()
    {
        return $this->hasMany(PostCommentFavorite::class);
    }

    public function action_logs()
    {
        return $this->hasMany(ActionLog::class);
    }
}
