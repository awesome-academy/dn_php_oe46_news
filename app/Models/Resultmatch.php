<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resultmatch extends Model
{
    use HasFactory;
    protected $table = 'result_matches';
    protected $fillable = [
        'score_team1',
        'score_team2',
    ];
    
    public function category()
    {
        return $this->belongsTo(Categorypost::class);
    }

    public function match()
    {
        return $this->belongsTo(Matches::class);
    }

    public function playermvp()
    {
        return $this->belongsTo(Player::class);
    }
}
