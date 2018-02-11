<?php

namespace App\Http\Controllers\Backend;

use App\Models\Rider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RiderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $riders=Rider::all();
        return view ('backend.rider.index',compact('riders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.rider.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $banner_img_name =  rand(1,99999).'.'.$request->file('banner_img')->getClientOriginalExtension();
        $content_img_name =  rand(1,99999).'.'.$request->file('banner_img')->getClientOriginalExtension();
        $request->file('banner_img')->move(public_path('assets/upload'),$banner_img_name);
        $request->file('content_img')->move(public_path('assets/upload'),$content_img_name);
        $data['description']=$request->description;
         $data['banner_img'] = $banner_img_name;
        $data['content_img'] = $content_img_name;
        $data['title']=$request->title;
        Rider::create($data);
        return redirect()->route('rider.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Rider  $rider
     * @return \Illuminate\Http\Response
     */
    public function show(Rider $rider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Rider  $rider
     * @return \Illuminate\Http\Response
     */
    public function edit(Rider $rider)
    {
        return view('backend.rider.edit',compact('rider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Rider  $rider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Rider $rider)
    {
        $new_banner_img=$this->uploadImage($request,'banner_img','assets/upload',$rider,$rider->banner_img);
        $new_content_img=$this->uploadImage($request,'content_img','assets/upload',$rider,$rider->content_img);
        $rider->description=$request->description;
        $rider->banner_img=$new_banner_img;
        $rider->content_img=$new_content_img;
        $rider->title=$request->title;
        $rider->update();
        return redirect()->route('rider.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Rider  $rider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Rider $rider)
    {
        ($rider->id != 1) ?  $rider->delete($rider->id) : '';
        return back();
    }
}
