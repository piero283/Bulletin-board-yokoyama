<?php

namespace App\Models\Posts;

use Illuminate\Database\Eloquent\Model;

class PostSubCategory extends Model
{
    protected $table = 'post_sub_categories';

    protected $fillable = [
        'post_main_category_id',
        'sub_category',
    ];

    //リレーション関係
    public function post_main_category()
    {
        return $this->belongsTo(PostMainCategory::class);
    }

    public function posts()
    {
        return $this->hosMany(Post::class);
    }
}
