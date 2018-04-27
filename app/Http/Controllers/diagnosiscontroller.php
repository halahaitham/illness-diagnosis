<?php

namespace App\Http\Controllers;

use App\category;
use App\diagnosis;
use App\symptoms;
use Illuminate\Http\Request;

class diagnosiscontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $diagnosis=diagnosis::all();
        foreach ($diagnosis as $dia)
        {
            $sym=symptoms::query()->find($dia->symptoms_id);
            //           forgin key of symptoms
            $dia->symptoms=$sym['content'];
        }
        //return view('admin.diagnosis.index',compact('diagnosis'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $symptoms=symptoms::pluck('content_A','content_B','content_C','content_D','content_E','content_F',
            'content_G','content_H','content_I','content_J','id');
        return view('admin.diagnosis.add_diagnosis',compact('symptoms'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'content_yes'=>'required',
            'content_no'=>'required'
        ]);
        diagnosis::create($request->all());
        return redirect()->route('diagnosis.index');
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
        diagnosis::destroy($id);
        return back();
    }
}
