@extends('admin.layout.iindex')
@section('content')

    <h1 style="text-align: center; color:blue"><i> الحجوزات </i></h1>
<br>

<div class="container">
    <div class="row">
               <!--/////////////////////////////////////////////////////////-->

        <div class="navbar" style="padding-left:45em">
            <br>
            <br>
            <br>
            <br>
            <ul class="nav navbar-nav" >
                <table class="table table-striped" >

                        @foreach($p as $item)
                        <tr>
                            <td>
                                <form action="{{route('patientappointment.destroy',$item->id)}}" method="post">
                                    {{csrf_field()}}
                                    {{method_field('delete')}}
                                    <input class="btn btn-sm btn-danger" type="submit" value="delete"/>
                                </form>
                            </td>
                            <td>
                                <div style="font-size: x-large">
                                    <li>
                                        <ol>
                                           {{$item->patient_name}}
                                        </ol>
                                    </li>
                                </div>
                            </td>


                        </tr>

                        @endforeach

                </table>
            </ul>
        </div>

        <span style="padding-right: 30em">
            <a class="btn btn-primary btn-lg" data-toggle="modal" href="#modal-id">اضافة مريض جديد</a>
        </span>

        <div class="modal fade" id="modal-id">
            <div class="modal-dialog" >
                {!! Form::open(['route'=>'patientappointment.store','method' => 'post']) !!}

                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">اضافه مريض جديد</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <div class="form-group">
                            {!! Form::label('patient_name', 'patient_name') !!}
                            {!!Form::text('patient_name', null, array('class'=>'form-control'))!!}
                        </div>

                        <div class="form-group">
@foreach($q as $value)
                            {!! Form::label('doctor_schedual_id', 'doctor_schedual_id') !!}
                            {!!Form::text('doctor_schedual_id',$value->id, null, array('class'=>'form-control'))!!}
@endforeach
                        </div>


                    </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Save changes</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>

                {!! Form::close() !!}

            </div>
        </div>
        </div>
    </div>
@endsection