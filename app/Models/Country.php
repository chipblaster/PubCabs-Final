<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $table=['name'];
    public function subscribes()
    {
        return $this->hasMany('App\Models\Subscribe','country_id');
    }
}
