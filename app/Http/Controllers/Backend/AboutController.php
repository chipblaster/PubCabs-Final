<?php

namespace App\Http\Controllers\Backend;

use App\Models\About;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $about=About::all()->first();
       
        return view('backend.about.index',compact('about'));
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
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function show(About $about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function edit(About $about)
    {
         return view('backend.about.edit',compact('about'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, About $about)
    {
        if ($request->hasFile('banner_img') && $request->hasFile('photo')) 
        {
            unlink('assets/upload/'.$about->banner_img);
            unlink('assets/upload/'.$about->photo);
            $banner_img =  rand(1,99999).'.'.$request->file('banner_img')->getClientOriginalExtension();
            $photo =  rand(1,99999).'.'.$request->file('photo')->getClientOriginalExtension();
            $request->file('banner_img')->move(public_path('assets/upload'),$banner_img);
            $request->file('photo')->move(public_path('assets/upload'),$photo);
            $new_banner_img = $banner_img;
            $new_photo=$photo;
        }
        elseif($request->hasFile('banner_img'))
        {
            unlink('assets/upload/'.$about->banner_img);
            $banner_img =  rand(1,99999).'.'.$request->file('banner_img')->getClientOriginalExtension();
            $request->file('banner_img')->move(public_path('assets/upload'),$banner_img);
            $new_banner_img = $banner_img;
        }
        elseif($request->hasFile('photo'))
        {
            unlink('assets/upload/'.$about->photo);
            $photo =  rand(1,99999).'.'.$request->file('photo')->getClientOriginalExtension();
            $request->file('photo')->move(public_path('assets/upload'),$photo);
            $new_photo = $photo;
        }
        else
        {
            $new_banner_img=$about->banner_img;
            $new_photo=$about->photo;  // content image
        }

        $about->description=$request->description;
        $about->banner_img=$new_banner_img;
        $about->photo=$new_photo;
        $about->update();
        return redirect()->route('about.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy(About $about)
    {
        //
    }
}
