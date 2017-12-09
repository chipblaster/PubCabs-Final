<?php
/**
 * Created by PhpStorm.
 * User: farid
 * Date: 12/8/17
 * Time: 5:22 PM
 */

namespace App\Http\ViewComposers;


use App\Models\About;
use App\Models\Contact;
use Illuminate\View\View;

class FooterComposer
{
    public $about;
    public $contact;

    public function __construct()
    {
        $this->about = About::all()->first();
        $this->contact = Contact::all()->first();
    }

    public function compose(View $view)
    {
        $view->with('about',$this->about);
        $view->with('contact',$this->contact);
    }
}