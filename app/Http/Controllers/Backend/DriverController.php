<?php

namespace App\Http\Controllers\Backend;

use App\Models\Driver;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DriverController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $drivers=Driver::all();
        return view("backend.driver.index",compact('drivers'));
    } 

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.driver.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
        $banner_img_name =  rand(1,99999).'-'.$request->file('banner_img')->getClientOriginalExtension();
        $content_img_name =  rand(1,99999).'-'.$request->file('banner_img')->getClientOriginalExtension();
        $request->file('banner_img')->move(public_path('assets/upload'),$banner_img_name);
        $request->file('content_img')->move(public_path('assets/upload'),$content_img_name);
        $data['description'] = $request->description;
        $data['banner_img'] = $banner_img_name;
        $data['content_img'] = $content_img_name;
        Driver::create($data);
        return redirect()->route('driver.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Driver  $driver
     * @return \Illuminate\Http\Response
     */
    public function show(Driver $driver)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Driver  $driver
     * @return \Illuminate\Http\Response
     */
    public function edit(Driver $driver)
    {
        return view('backend.driver.edit',compact('driver'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Driver  $driver
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Driver $driver)
    {
         if ($request->hasFile('banner_img') && $request->hasFile('content_img')) 
        {
            unlink('assets/upload/'.$driver->banner_img);
            unlink('assets/upload/'.$driver->photo);
            $banner_img =  rand(1,99999).'.'.$request->file('banner_img')->getClientOriginalExtension();
            $content_img =  rand(1,99999).'.'.$request->file('content_img')->getClientOriginalExtension();
            $request->file('banner_img')->move(public_path('assets/upload'),$banner_img);
            $request->file('content_img')->move(public_path('assets/upload'),$content_img);
            $new_banner_img = $banner_img;
            $new_content_img=$content_img;
        }
        elseif($request->hasFile('banner_img'))
        {
            unlink('assets/upload/'.$driver->banner_img);
            $banner_img =  rand(1,99999).'.'.$request->file('banner_img')->getClientOriginalExtension(); 
            $request->file('banner_img')->move(public_path('assets/upload'),$banner_img);
            $new_banner_img = $banner_img;
        }
        elseif($request->hasFile('photo'))
        {
            unlink('assets/upload/'.$driver->photo);
            $photo =  rand(1,99999).'.'.$request->file('content_img')->getClientOriginalExtension();
            $request->file('content_img')->move(public_path('assets/upload'),$content_img);
            $new_content_img = $content_img;
        }
        else
        {
            $new_banner_img=$driver->banner_img;
            $new_content_img=$driver->content_img;  // content image
        }

        $driver->description=$request->description;
        $driver->banner_img=$new_banner_img;
        $driver->content_img=$new_content_img;
        $driver->update();
        return redirect()->route('driver.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Driver  $driver
     * @return \Illuminate\Http\Response
     */
    public function destroy(Driver $driver)
    {
        $driver->delete($driver->id);
        return back();
    }
}
