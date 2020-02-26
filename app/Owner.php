<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    public function animals()
    {
        return $this->hasMany(Animal::class);
    }

    protected $fillable = ['title', 'name', 'address_line_1', 'address_line_2', 'postcode', 'city'];
}
