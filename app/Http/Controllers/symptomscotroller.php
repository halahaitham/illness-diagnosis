<?php

namespace App\Http\Controllers;

use App\category;
use App\illness;
use App\symptoms;
use Illuminate\Http\Request;

class symptomscotroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $symptoms=symptoms::all();
        foreach ($symptoms as $s){
            //                               forgien key
            $cat=category::query()->find($s->illness_id);
            $s->category=$cat['name'];
        }
        return view('admin.symptoms.index',compact('symptoms'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category=category::pluck('name','id');
        return view('admin.symptoms.add_symptoms',compact('category'));
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
            'content_A'=>'required',
            'diagnosis_yes'=>'required',
            'diagnosis_no'=>'required'
        ]);
        symptoms::create($request->all());
        return redirect()->route('symptoms.index');
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
        $symptoms=symptoms::find($id);
        return view('admin.symptoms.edit_symptoms', compact('symptoms'));
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
        $this->validate($request,[
           'content_A'=>'required',
           'diagnosis_yes' =>'required',
            'diagnosis_no'=>'required'
        ]);
        symptoms::find($id)->update($request->all());
        return redirect()->route('symptoms.index')->with('success','تم التعديل بنجاح');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        symptoms::destroy($id);
        return back();
    }

    public function dia()
    {
        $symp=symptoms::all();
            return view('admin.diagnosis.index',compact('symp'));

    }



    public function cancel()
    {
        return redirect()->route('symptoms.index');
    }







}
