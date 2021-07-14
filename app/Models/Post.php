<?php

namespace App\Models;

use App\Models\Category_post;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;
    protected $table = 'posts';

    protected $fillable = [
        'title',
        'body',
        'img',
        'slug',
        'exceprt',
        'content_type',
        'cate_id',
        'user_id',
    ];
    
    public function category()
    {
        return $this->belongsTo(Categorypost::class, 'cate_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
