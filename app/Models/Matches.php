<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matches extends Model
{
    use HasFactory;
    protected $table = 'matches';

    protected $fillable = [
        'match_date',
        'status',
    ];
    
    public function category()
    {
        return $this->belongsTo(Categorypost::class);
    }
    
    public function team1()
    {
        return $this->belongsTo(Team::class, 'team1_id')->withTimestamps();
    }

    public function team2()
    {
        return $this->belongsTo(Team::class, 'team2_id')->withTimestamps();
    }

    public function league()
    {
        return $this->belongsTo(league::class);
    }

    public function resultmatch()
    {
        return $this->hasOne(Resultmatch::class);
    }
}
