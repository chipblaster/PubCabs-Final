<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
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
}
