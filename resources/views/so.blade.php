<link rel="stylesheet" href="//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css">

{!! Form::open(['url' =>'admintable','method' => 'get','files'=>true]) !!}

{!! Form::text('date', '', array('id' => 'datepicker'))!!}:مواعيد الطبيب
{!! Form::close() !!}

<script type="text/javascript">
    $(function() {
        $( "#datepicker" ).datepicker({

            changeMonth: true,
            changeYear: true
        });
    });
</script>


<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<script src="//code.jquery.com/ui/1.11.2/jquery-ui.js"></script>
<script>
    $(function() {
        $( "#datepicker" ).datepicker();
    });
</script>



<!--///////////////////////////////////////////////////////////-->
<html>
<head>
    <title>doctor's schedual</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link href="{{asset('dist/css/appointment.css')}}" rel="stylesheet">


</head>
<body class="content">


<input data-format="dd/MM/yyyy hh:mm:ss" type="text" style="margin-right: 0.5em">  :اسم الطبيب </input>

<br>
<br>
<input type="text" id="week" />:مواعيد الطبيب

<br>
<br>

<div class="dropdown" style="padding-right: 5em">
    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        اختر  اليوم
    </button>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <a class="dropdown-item" href="#">السبت</a>
        <a class="dropdown-item" href="#"> الاحد</a>
        <a class="dropdown-item" href="#">الاثنين</a>
        <a class="dropdown-item" href="#">الثلاثاء</a>
        <a class="dropdown-item" href="#">الاربعاء</a>
        <a class="dropdown-item" href="#">الخميس</a>
        <a class="dropdown-item" href="#">الجمعة</a>
    </div>
</div>

<br>
<div style="padding-right: 15em">
    {!! Form::submit('submit',array('class'=>'btn btn-info btn-lg'))!!}
</div>





<script src="js/jquery.min.js"></script>
<script src="js.calendar7.js"></script>
<script>
    $('#week').Calendar7();
</script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>








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
               <a href="{{url('add_new_paitent',['id'=>$item->doctor_schedual_id])}}" class="btn btn-primary btn-lg">اضافة مريض جديد</a>
        </span>


        </div>
    </div>
@endsection






<!--///////////////////////////////schedual table///////////////////////////////-->
<tbody>

<tr>
    <td></td>
    @foreach($specialism as $item)
        @if($item->day ==="السبت")
            <td>
                <a class="btn btn-primary btn-lg" href="{{url('button',['id'=>$item->id])}}">
                    {{$item->doctor_name}}<br>
                    {{$item->day}}<br>
                    {{$item->from}}<br>
                    {{$item->to}}
                </a>
            </td>
        @elseif($item->day === "الاحد")
            <td>
                <a class="btn btn-primary btn-lg" href="{{url('button',['id'=>$item->id])}}">
                    {{$item->doctor_name}}<br>
                    {{$item->day}}<br>
                    {{$item->from}}<br>
                    {{$item->to}}
                </a>
            </td>
        @elseif($item->day === "الاثنين")
            <td>
                <a class="btn btn-primary btn-lg"  href="{{url('button',['id'=>$item->id])}}">
                    {{$item->doctor_name}}<br>
                    {{$item->day}}<br>
                    {{$item->from}}<br>
                    {{$item->to}}
                </a>
            </td>
        @elseif($item->day === "الثلاثاء")
            <td>
                <a class="btn btn-primary btn-lg"href="{{url('button',['id'=>$item->id])}}">
                    {{$item->doctor_name}}<br>
                    {{$item->day}}<br>
                    {{$item->from}}<br>
                    {{$item->to}}
                </a>
            </td>
        @elseif($item->day === "الاربعاء")
            <td>
                <a class="btn btn-primary btn-lg" href="{{url('button',['id'=>$item->id])}}">
                    {{$item->doctor_name}}<br>
                    {{$item->day}}<br>
                    {{$item->from}}<br>
                    {{$item->to}}
                </a>
            </td>
        @elseif($item->day === "الخميس")
            <td>
                <a class="btn btn-primary btn-lg" href="{{url('button',['id'=>$item->id])}}">
                    {{$item->doctor_name}}<br>
                    {{$item->day}}<br>
                    {{$item->from}}<br>
                    {{$item->to}}
                </a>
            </td>
        @elseif($item->day === "الجمعه")
            <td>
                <a class="btn btn-primary btn-lg" href="{{url('button',['id'=>$item->id])}}">
                    {{$item->doctor_name}}<br>
                    {{$item->day}}<br>
                    {{$item->from}}<br>
                    {{$item->to}}
                </a>
            </td>
        @endif

    @endforeach

</tr>

</tbody>

<tr>
    <th scope="col">#</th>
    <th scope="col">لسبت</th>
    <th scope="col">الاحد</th>
    <th scope="col">الاثنين</th>
    <th scope="col">الثلاثاء</th>
    <th scope="col">الاربعاء</th>
    <th scope="col">الخميس</th>
    <th scope="col">الجمعه</th>
</tr>



<!--////////////////////////////////////-->
@extends('front.main')
@section('content')
    <body class="content" >
    <h1 style="text-align: center; color:blue"><i>مواعيد الأطباء</i></h1>
    <br>
    <div class="container" dir="rtl">
        <div class="row" dir="rtl">
            @foreach($specialism as $item)
                <table class="table">

                    <thead class="thead-dark">

                    @foreach($item->day as $value)
                        <tr></tr>
                    </thead>
                    <tbody>

                    <tr>
                        <td style="font-size:x-large; text-align: center; padding-top: 2em"><b>{{$value->day}}</b></td>

                        <td>
                            <a class="btn btn-primary btn-lg" href="{{url('button',['id'=>$item->id])}}">
                                د. {{$value->doctor_name}} <br>
                                {{$value->from}}<br>
                                {{$value->to}}
                            </a>
                        </td>
                        @endforeach
                        @endforeach

                    </tr>

                    </tbody>
                </table>



        </div>
    </div>


    <div class="modal fade" tabindex="-1" role="dialog" id="model_id" >
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" >بيانات الحجز</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">



                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Save changes</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>








@endsection