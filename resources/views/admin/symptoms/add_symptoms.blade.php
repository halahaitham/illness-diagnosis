@extends('admin.layout.iindex')
@section('content')

    <div class="row">
        <div class="col-md-6 col-md-offset-3">
    {!! Form::open(['route' => 'symptoms.store', 'method' => 'post','files'=>true]) !!}
            <h3 style="color: #0c4d78"> :اضافه الاعراض</h3>

            <div class="form-group">
                {!! Form::label('illness_id', 'illness_id') !!}
                {!!Form::select('illness_id', $category ,null, ['class'=>'form-control','placeholder'=>'select illness'])!!}
            </div>


            <div class="form-group">
                {!! Form::label('content_A', 'content_A') !!}
                {!!Form::text('content_A', null, array('class'=>'form-control'))!!}
            </div>

            <div class="form-group">
                {!! Form::label('content_B', 'content_B') !!}
                {!!Form::text('content_B', null, array('class'=>'form-control'))!!}
            </div>

            <div class="form-group">
                {!! Form::label('content_C', 'content_C') !!}
                {!!Form::text('content_C', null, array('class'=>'form-control'))!!}
            </div>

            <div class="form-group">
                {!! Form::label('content_D', 'content_D') !!}
                {!!Form::text('content_D', null, array('class'=>'form-control'))!!}
            </div>

            <div class="form-group">
                {!! Form::label('content_E', 'content_E') !!}
                {!!Form::text('content_E', null, array('class'=>'form-control'))!!}
            </div>

            <div class="form-group">
                {!! Form::label('content_F', 'content_F') !!}
                {!!Form::text('content_F', null, array('class'=>'form-control'))!!}
            </div>

            <div class="form-group">
                {!! Form::label('content_J', 'content_J') !!}
                {!!Form::text('content_J', null, array('class'=>'form-control'))!!}
            </div>

            <div class="form-group">
                {!! Form::label('content_H', 'content_H') !!}
                {!!Form::text('content_H', null, array('class'=>'form-control'))!!}
            </div>

            <div class="form-group">
                {!! Form::label('content_I', 'content_I') !!}
                {!!Form::text('content_I', null, array('class'=>'form-control'))!!}
            </div>

            <div class="form-group">
                {!! Form::label('content_J', 'content_J') !!}
                {!!Form::text('content_J', null, array('class'=>'form-control'))!!}
            </div>

            <h3 style="color: #0c4d78"> :التشخيص</h3>

            <div class="form-group">
                {!! Form::label('diagnosis_yes', 'diagnosis_yes') !!}
                {!!Form::text('diagnosis_yes', null, array('class'=>'form-control'))!!}
            </div>

            <div class="form-group">
                {!! Form::label('diagnosis_no', 'diagnosis_no') !!}
                {!!Form::text('diagnosis_no', null, array('class'=>'form-control'))!!}
            </div>




            {!! Form::submit('add',array('class'=>'btn btn-success'))!!}

    {!! Form::close() !!}
        </div>
    </div>

@endsection