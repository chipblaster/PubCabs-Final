<?php

namespace App\Http\Controllers\Frontend;

use App\Models\About;
use App\Models\Contact;
use App\Models\Social;
use App\Models\Driver; 
use App\Models\Country; 
use App\Models\Subscribe; 
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $about = About::all()->first();
        $contact=Contact::all()->first();
        $driver=Driver::all()->last();
        $countries=Country::all();
        return view('frontend.index',compact('about','contact','driver','countries'));
    }


    /**
     * Display a about page.
     */

    public function about()
    {
        $about = About::all()->first();
        return view('frontend.about',compact('about'));
    }

    /**
     * Display a contact page.
     */

    public function contact()
    {
        $contact = Contact::all()->first();
        $socials = Social::all();
        return view('frontend.contact',compact('contact','socials'));
    }

    public function subscribe(Request $request)
    {
        Subscribe::create($request->all());
        return back();
    }



    public function mail()
    {
        echo "mail";
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

     
    
}
