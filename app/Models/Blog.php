<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $table = 'blog_post';
    protected $guarded = [];

    public function Blog_category(Type $var = null)
    {
        return $this->belongsTo(Blog_category::class);
    }
}
