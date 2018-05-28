<?php

namespace App\Http\Controllers;

use App\patientappointment;
use App\schedual;
use App\specialism;
use Illuminate\Http\Request;

class schedualcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $specialism = specialism::all();
        foreach ($specialism as $s) {
            $schedual = schedual::query()->where('specialism_id', '=', $s->id)->get();
            $s->specialism = $schedual;
        }//return $specialism;
        return view('admin.appointment.doctor-schedual.index',compact('specialism'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   $specialism=specialism::pluck('name','id');
        return view('admin.appointment.doctor-schedual.add-schedual',compact('specialism'));
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
            'doctor_name'=>'required',
            'day'=>'required',
            'from'=>'required',
            'to'=>'required',
            'image'=>'image|mimes:jpg,jpeg,png|max:1000'
        ]);
        $image=$request->image;
        if ($image){
            $imageName=$image->getClientOriginalName();
            $image->move('image',$imageName);
            $form['image']=$imageName;
        }
        //schedual::create($form);
        schedual::create($request->all(),$form);
        return redirect()->route('schedual.index');
     //   return back();

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
        schedual::destroy($id);
        return back();
    }

    public function doctors_schedual($id)
     {
        /* $specialism = schedual::query()->where('specialism_id', '=', $id)->get();
         foreach ($specialism as $day)
         {
             $s=schedual::query()->where('day','=',$day->day)->get();
             $day->day=$s;
         }*/
         $specialism = schedual::query()->where('specialism_id', '=', $id)->get();
          return view('front.appointment.doctors-schedual',compact('specialism'));
     }


     public function button($id)
     {
         $button=schedual::query()->where('id','=',$id)->get();
         $image=schedual::query()->where('id','=', $id)->value('image');
         if(!$image)
         {
            $image=url('image/woman.jpg');
         };
         //return $image;
         return view('front.appointment.appointment_form',compact('button','image'));

     }


     public function specialism_schedual($id)
     {
         $ss=schedual::query()->where('specialism_id','=',$id)->get();
         return view('admin.appointment.appointments.doctor_schedual',compact('ss'));
     }

    public function adminbutton($id)
    {
        $p=patientappointment::query()->where('doctor_schedual_id','=',$id)->get();
        $q=schedual::query()->where('id','=',$id)->get();
        return view('admin.appointment.appointments.appointment_scheduale',compact('p','q'));

    }










}
