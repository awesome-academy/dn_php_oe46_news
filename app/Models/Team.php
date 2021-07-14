<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;
    protected $table = 'teams';

    protected $fillable = [
        'name',
        'country',
        'cate_id',
    ];
    
    public function category()
    {
        return $this->belongsTo(Categorypost::class, 'cate_id');
    }
    
    public function players()
    {
        return $this->hasMany(Player::class);
    }

    public function team1matches()
    {
        return $this->hasMany(Matches::class, 'team1_id')->withTimestamps();
    }

    public function team2matches()
    {
        return $this->hasMany(Matches::class, 'team2_id')->withTimestamps();
    }

    public function ranks()
    {
        return $this->hasMany(Rank::class);
    }

    public function prize()
    {
        return $this->hasMany(Teamprize::class);
    }

    public function leagues()
    {
        return $this->belongsToMany(League::class, 'teams_leagues', 'team_id', 'league_id')
                    ->withTimestamps();
    }

    public function transin()
    {
        return $this->hasMany(Transfer::class, 'idteam_in')->withTimestamps();
    }
    
    public function transout()
    {
        return $this->hasMany(Transfer::class, 'idteam_out')->withTimestamps();
    }
}
