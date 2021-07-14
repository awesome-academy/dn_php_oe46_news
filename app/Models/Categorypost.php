<?php

namespace App\Models;

use App\Models\Post;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Categorypost extends Model
{
    use HasFactory;
    protected $table = 'categories_post';
    protected $fillable = [
        'name',
    ];
    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function teams()
    {
        return $this->hasMany(Team::class);
    }
    public function resultmatches()
    {
        return $this->hasMany(Resultmatch::class);
    }
    public function leagues()
    {
        return $this->hasMany(League::class);
    }

    public function ranks()
    {
        return $this->hasMany(Rank::class);
    }

    public function transfers()
    {
        return $this->hasMany(Transfer::class);
    }
}
