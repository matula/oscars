<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nomination extends Model
{
    protected $table = 'nominations';
    public $timestamps = false;

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function movie()
    {
        return $this->belongsTo(Movie::class);
    }

    public function person()
    {
        return $this->belongsTo(Person::class, 'people_id');
    }
}
