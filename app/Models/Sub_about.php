<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sub_about extends Model
{
	protected $fillable = ['about_id','title','description'];

    public function about()
    {
        return $this->belongsTo('App\Models\About','id');
    }
}
