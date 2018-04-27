@extends('admin.layout.iindex')
@section('content')
    <h3>اضافه اعلان</h3>
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
    {!! Form::open(['route' => 'advertise.store', 'method' => 'post','files'=>true]) !!}


            <div class="form-group">
                {!! Form::label('image', 'image') !!}
                {!!Form::file('image',  array('class'=>'form-control'))!!}
            </div>


    {!! Form::submit('create',array('class'=>'btn btn-success'))!!}


    {!! Form::close() !!}

        </div>
    </div>
@endsection