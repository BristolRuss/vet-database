<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Carbon\Carbon;

class Animal extends Model
{
    protected $dates = [
        'date-of-birth'
    ];

    public function getDate()
    {
        return $this->{'date-of-birth'}->diffForHumans();
    }

    protected $fillable = ['name', 'biteyness', 'species', 'height', 'weight', 'image', 'date-of-birth', 'owner_id'];

    public function getAge()
    {
        return $this->{'date-of-birth'}->diff(Carbon::now())->format('%y years, %m months' );
    }

    public function owner()
    {
        return $this->belongsTo(Owner::class);
    }
}
