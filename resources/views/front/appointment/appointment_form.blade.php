@extends('front.main')
@section('content')
<html>
<head>
    <title>appointment</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body style="background-color: lavender">
<br>

<br>
<div style="padding-left: 35em">
<div class="card" style="width: 18rem;  text-align:center">
    {{url(asset('image',$image))}}
    <img src="{{asset('image/woman.jpg')}}" class="card-img-top"  alt="Card image cap" height="20%" >
    <div class="card-body" style="border: 1em; border-color: black; padding-top: 0em" >
       @foreach($button as $item)
        <h5 class="card-title"> د.{{$item->doctor_name}} </h5>
        <p class="card-text">{{$item->from}} to  {{$item->to}}</p>
        <p class="card-text">{{$item->day}}</p>



    {!! Form::open(['route' => 'patientappointment.store', 'method' => 'post','files'=>true]) !!}

    <div class="form-group">
        {!! Form::label('patient_name', 'اسم المريض') !!}
        {!!Form::text('patient_name', null, array('class'=>'form-control'))!!}
    </div>

            <div class="form-group">
                {!! Form::label('doctor_schedual_id', 'doctor_schedual_id') !!}
                {!!Form::text('doctor_schedual_id',$item->id, array('class'=>'form-control'))!!}
            </div>
            <button  class="btn btn-primary" type="submit" >تاكيد</button>
    {!! Form::close() !!}
        @endforeach
</div>
</div>
</div>



<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
@endsection
</html>







