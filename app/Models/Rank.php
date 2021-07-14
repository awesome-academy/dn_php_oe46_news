<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rank extends Model
{
    use HasFactory;
    protected $table = 'ranks';

    protected $fillable = [
        'match_win',
        'match_lose',
        'match_draw',
    ];
    
    public function team()
    {
        return $this->belongsTo(Team::class);
    }
    
    public function category()
    {
        return $this->belongsTo(Categorypost::class);
    }

    public function league()
    {
        return $this->belongsTo(League::class);
    }
}
