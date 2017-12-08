<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AdminLoginRequest;
use Illuminate\Support\Facades\Auth;

class WebController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function error()
    {
        return view('errors.404');
    }

    public function admin_login()
    {
        return view('auth.login');
    }
    
    public function post_admin(AdminLoginRequest $request)
    {
        $email=$request->email;
        $password=$request->password;
       if (Auth::attempt(['email' => $email, 'password' => $password])) 
        {
            // Authentication passed...
            return redirect(route('admin'));
        }
    }
}
