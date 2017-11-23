<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
	protected $fillable = ['description','banner_img','photo'];

    public function sub_about()
    {
        return $this->hasMany('App\Models\Sub_about','about_id');
    }
}
