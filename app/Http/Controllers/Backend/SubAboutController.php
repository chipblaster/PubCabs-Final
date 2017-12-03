<?php

namespace App\Http\Controllers\Backend;

use App\Models\Sub_about;
use App\Models\About;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SubAboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.sub-about.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $abouts=About::all()->first();
         $about_id=$abouts->id;
         $data['about_id']=$about_id;
         $data['title']=$request->title;
         $data['description']=$request->description;
         Sub_about::create($data);
         return redirect()->route('about.index');
    }

    /** 
     * Display the specified resource.
     *
     * @param  \App\Models\Sub_about  $sub_about
     * @return \Illuminate\Http\Response
     */
    public function show(Sub_about $sub_about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sub_about  $sub_about
     * @return \Illuminate\Http\Response
     */
    public function edit(Sub_about $sub_about)
    {
        return view('backend.sub-about.edit',compact('sub_about'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sub_about  $sub_about
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sub_about $sub_about)
    {
       $sub_about->update($request->all());
       return redirect()->route('about.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sub_about  $sub_about
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sub_about $sub_about)
    {
         $sub_about->delete($sub_about->id);
         return back();
    }
}
