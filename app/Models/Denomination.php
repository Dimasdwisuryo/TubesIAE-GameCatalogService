<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Denomination extends Model
{
    protected $fillable = [
        'game_id',
        'name',
        'price'
    ];

    public function game()
    {
        return $this->belongsTo(Game::class);
    }
}