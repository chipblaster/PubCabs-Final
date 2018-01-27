<?php

namespace App\Http\Controllers\Backend;
use Mail;
use App\Models\Subscribe;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SubscribeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subscribes=Subscribe::all();
        return view('backend.subscribe.index',compact('subscribes'));
    }


    public function block(Request $request)
    { 
        if ($request->ajax()) 
        {
         Subscribe::where('id', $request->id)
                   ->update(['is_block' => $request->block]);
        }
    }

    public function mail(Request $request)
    {
        $subscribes=Subscribe::find($request->id);
        foreach ($subscribes as $key => $subscribe) 
        {
            $data = array(
            'text' => $request->message, 
            'name' => $subscribe->first_name, 
            );

            Mail::send('backend.subscribe.email', $data, function($message) use ($subscribe) {
            $message->to($subscribe->email, 'PubCap')
                     ->subject("PubCabs");
            $message->from("demo@admin.com","PubCap");

            });
            if( count(Mail::failures()) > 0 ) 
            {
                foreach(Mail::failures as $email_address) 
                {
                    $request->session()->flash('status', 'There was one or more failures. They were: <br />'.$email_address);
                }
            } 
            else 
            {
               $request->session()->flash('status', 'No errors, all sent successfully!');
            }
        }

         return back();

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
     * @param  \App\Models\Subscribe  $subscribe
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Subscribe  $subscribe
     * @return \Illuminate\Http\Response
     */
    public function edit(Subscribe $subscribe)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Subscribe  $subscribe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Subscribe $subscribe)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Subscribe  $subscribe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subscribe $subscribe)
    {
        //
    }
}
