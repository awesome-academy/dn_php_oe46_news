<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class League extends Model
{
    use HasFactory;
    protected $table = 'leagues';
    
    protected $fillable = [
        'name',
        'area',
    ];

    public function category()
    {
        return $this->belongsTo(Categorypost::class);
    }

    public function playermvp()
    {
        return $this->belongsTo(Player::class);
    }

    public function seasons()
    {
        return $this->belongsToMany(Season::class, 'league_seasons', 'league_id', 'season_id')
                    ->withTimestamps();
    }

    public function rank()
    {
        return $this->hasOne(Rank::class);
    }

    public function matches()
    {
        return $this->hasMany(Matches::class);
    }

    public function teams()
    {
        return $this->belongsToMany(Team::class, 'teams_leagues', 'league_id', 'team_id')
                    ->withTimestamps();
    }
}
