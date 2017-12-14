<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subscribe extends Model
{
	protected $fillable = ['first_name','last_name','email','phone','zip_code','type','is_block','country_id'];

    public function country()
    {
        return $this->belongsTo('App\Models\Country','id');
    }
}
