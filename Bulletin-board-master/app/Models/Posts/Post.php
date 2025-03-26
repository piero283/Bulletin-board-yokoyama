<?php

namespace App\Models\Posts;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';

    protected $fillable = [
        'user_id',
        'post_sub_category_id',
        'delete_user_id',
        'update_user_id',
        'title',
        'post',
        'event_at',
    ];

    //リレーション関係
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function post_sub_category()
    {
        return $this->belongsTo(PostSubCategory::class);
    }

    public function post_comments()
    {
        return $this->hasMany(PostComment::class);
    }

    public function post_favorites()
    {
        return $this->hasMany(PostFavorite::class);
    }

    public function action_logs()
    {
        return $this->hasMany(ActionLog::class);
    }
}
