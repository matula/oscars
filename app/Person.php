<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $table = 'people';
    public $timestamps = false;

    public function nominations()
    {
        return $this->hasMany(Nomination::class);
    }
}
