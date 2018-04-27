<?php

namespace App\Http\Controllers;

use App\advertise;
use App\category;
use App\symptoms;
use Illuminate\Http\Request;

class frontcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cat = category::all();
        return view('front.index', compact('cat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $symptoms = symptoms::all();
        foreach ($symptoms as $s) {
            //                               forgien key
            $cat = category::query()->find($s->illness_id);
            $s->category = $cat['name'];
        }
        return view('front.second', compact('symptoms'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }

    public function showw($id)
    {
        $symptom = symptoms::query()->where('illness_id', '=', $id)->get();
        $adv = advertise::orderBy('id', 'desc')->take(2)->get();

        return view('front.second', compact('symptom','adv'));
    }


    public function yes($id)
    {
        $symptom = symptoms::query()->where('id', '=', $id)->value('diagnosis_yes');
        $adv = advertise::orderBy('id', 'desc')->take(2)->get();
        return view('front.third', compact('symptom','adv'));
    }

    public function no($id)
    {
        $symptom = symptoms::query()->where('id', '=', $id)->value('diagnosis_no');
        $adv=advertise::all();
        return view('front.third', compact('symptom','adv'));
    }




    public function c()
    {

        $adv = advertise::all();
        $dogs = advertise::orderBy('id', 'desc')->take(2)->get();

        return $dogs;


    }


}
