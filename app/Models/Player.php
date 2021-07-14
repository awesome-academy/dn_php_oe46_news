<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    use HasFactory;
    protected $table = 'players';
    protected $fillable = [
        'name',
        'dateOfBirth',
        'position',
    ];

    public function team()
    {
        return $this->belongsTo(Team::class);
    }

    public function mvpleague()
    {
        return $this->hasMany(League::class);
    }

    public function mvpmatch()
    {
        return $this->hasMany(Resultmatch::class);
    }

    public function transfer()
    {
        return $this->hasMany(Transfer::class);
    }
}
