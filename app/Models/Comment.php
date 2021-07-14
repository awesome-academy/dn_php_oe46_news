<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $table = 'comments';
    
    protected $fillable = [
        'parent_id',
        'body',
    ];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function post()
    {
        return $this->belongsTo(Post::class);
    }

    public function childComments()
    {
        return $this->hasMany(Comment::class, 'parent_id', 'id')->withTimestamps();
    }

    public function parentComment()
    {
        return $this->belongsTo(Comment::class, 'parent_id')->withTimestamps();
    }
}
