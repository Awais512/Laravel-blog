<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Blog extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $fillable = ['title', 'body', 'featured_image', 'meta_title', 'meta_description'];

    public function category()
    {
        return $this->belongsToMany(Category::class);
    }
}
