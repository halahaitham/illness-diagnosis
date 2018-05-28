@extends('admin.layout.iindex')
@section('content')

    <div class="row">
        <div class="col-md-6 col-md-offset-3">

            <div class="alert alert-info">
                <strong>يجب ملئ content A  و diagnosis!</strong>
            </div>
            {!! Form::open(['route' =>[ 'symptoms.update',$symptoms->id], 'method' => 'PATCH','files'=>true]) !!}
            <h3 style="color: #0c4d78"> :تعديل الاعراض</h3>


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
                {!! Form::label('diagnosis_yes', 'diagnosis') !!}
                {!!Form::text('diagnosis_yes', null, array('class'=>'form-control'))!!}
            </div>

            <h3 style="color: #0c4d78"> :نصائح طبيه</h3>

            <div class="form-group">
                {!! Form::label('advice', 'advice') !!}
                {!!Form::text('advice', null, array('class'=>'form-control'))!!}
            </div>




<table>
    <tr>
        <td style="padding-top: 1em">
            {!! Form::submit('edit',array('class'=>'btn btn-primary'))!!}

            {!! Form::close() !!}
        </td>
        <td style="padding-bottom: 0.5em;">
            <br>
            <form action="{{url('cancel')}}" method="get">
                <input class="btn btn-large btn-warning" type="submit" value="cancel" />
            </form>
        </td>
    </tr>
</table>



        </div>
    </div>

@endsection