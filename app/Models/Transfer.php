<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transfer extends Model
{
    use HasFactory;
    protected $table = 'transfers';
    
    public function category()
    {
        return $this->belongsTo(Categorypost::class);
    }

    public function player()
    {
        return $this->belongsTo(Player::class);
    }

    public function teamin()
    {
        return $this->belongsTo(Team::class, 'idteam_in')->withTimestamps();
    }

    public function teamout()
    {
        return $this->belongsTo(Team::class, 'idteam_out')->withTimestamps();
    }
}
