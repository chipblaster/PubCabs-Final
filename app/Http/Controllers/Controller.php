<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use MetaTag;
class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function __construct()
    {
        MetaTag::set('title', 'This is a detail page');
        MetaTag::set('description', 'All about this detail page');
        MetaTag::set('keywords', 'ovt oracle');
        MetaTag::set('image', asset('images/detail-logo.png'));
    }
    protected function uploadImage(Request $request,$fileName,$uploadPath,$model,$imageColumnNameFromDb)
    {
        $uploadDirection = public_path($uploadPath);
        if ($request->hasFile($fileName))
        {
            $this->validate($request, [$fileName => 'image']);
            $newImageName =  rand(1,99999).$model->id.'.'.$request->file($fileName)->getClientOriginalExtension();
            $request->file($fileName)->move($uploadDirection,$newImageName);
            return $newImageName;
        }
        else
        {
            return $imageColumnNameFromDb;
        }
    }
}
