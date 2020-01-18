<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $table = 'movies';
    public $timestamps = false;

    public function nominations()
    {
        return $this->hasMany(Nomination::class);
    }
}
