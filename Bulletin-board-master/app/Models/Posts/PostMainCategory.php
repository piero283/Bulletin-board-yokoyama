<?php

namespace App\Models\Posts;

use Illuminate\Database\Eloquent\Model;

class PostMainCategory extends Model
{
    protected $table = 'post_main_categories';

    protected $fillable = [
        'main_category',
    ];

    //リレーション関係
    public function post_sub_categories()
    {
        return $this->hasMany(PostSubCategory::class);
    }
}
