<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $fillable = [
        'name',
        'slug',
        'image_url'
    ];

    public function denominations()
    {
        return $this->hasMany(Denomination::class);
    }
}