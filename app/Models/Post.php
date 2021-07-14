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
        'img',
        'slug',
        'exceprt',
        'content_type',
        'body',
    ];
    
    public function category()
    {
        return $this->belongsTo(Categorypost::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
