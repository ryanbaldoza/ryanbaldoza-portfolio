<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HeaderController extends Controller
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

    public function sendMail(Request $request)
    {
        $rules = array(
        'name' => 'required',
        'email' => 'required',
        'subject' => 'required',
        'message' => 'required',
      
          );
          // for Validator
          $validator = Validator::make ( Input::all (), $rules );
          if ($validator->fails())
          return back()->withErrors($validator);

        else {
            $data = [
            'name' => $request->name,
            'email' =>$request->email,
            'subject' =>$request->subject,
            'text' =>$request->message,
            ];
            Mail::send('mail.send', $data, function($message){
                $message->to('ryanbaldoza@gmail.com', 'Ryan Baldoza')->subject('Message received from contact form');
            });

            $notification = array(
                'message' => 'Message has been sent!', 
                'alert-type' => 'success'
            );
        return back()->with($notification);
        }    
    }

    public function pagenotfound()
    {
     
        return view('home');
    }
}
