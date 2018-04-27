<?php

namespace App\Http\Controllers;

use Adumskis\LaravelAdvert\Model\Advert;
use App\advertise;
use App\category;
use Illuminate\Http\Request;

class advertisecontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //$advertise=advertise::pluck('image','id');
        return view('admin.advertise',compact('advertise'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $form=$request->all('image');
        $this->validate($request,[
            'image'=>'image|mimes:jpg,jpeg,png|max:1000'
        ]);
        $image=$request->image;
        if ($image){
        $imageName=$image->getClientOriginalName();
        $image->move('image',$imageName);
        $form['image']=$imageName;
        }
        advertise::create($form);
        return back()->with('success','Item created successfully');
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
