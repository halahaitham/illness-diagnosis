<html >
<head>

    <title>doctor's schedual</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" media="screen" href="https://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

    <link href="{{asset('dist/css/appointment.css')}}" rel="stylesheet">


</head>
<body class="content" DIR="rtl">

    <div class="row">
        <div class="col-md-6 col-md-offset-3">

            {!! Form::open(['route' => 'schedual.store', 'method' => 'post','files'=>true]) !!}

                        <div class="form-group">
                            {!! Form::label('doctor_name', 'اسم الطبيب :') !!}
                            {!!Form::text('doctor_name', null, array('class'=>'form-control'))!!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('specialism_id', 'تخصص الطبيب :') !!}
                            {!!Form::select('specialism_id',$specialism, null, ['class'=>'form-control','placeholder'=>'التخصص'])!!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('day', 'اليوم:') !!}
                            {!!Form::select('day',['السبت'=> 'السبت',
                            'الاحد'=>'الاحد','الاثنين'=>'الاثنين',
                            'الثلاثاء'=>'الثلاثاء','الاربعاء'=>'الاربعاء'
                           ,'الخميس'=>'الخميس' ,'الجمعه'=>'الجمعه'],
                            null, ['class'=>'form-control','placeholder'=>'اليوم'])!!}
                        </div>


                        <div class="form-group">
                            {!! Form::label('from', 'من الساعه :') !!}
                            {!!Form::text('from', null, array('class'=>'form-control'))!!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('to','الى الساعه: ') !!}
                            {!!Form::text('to', null, array('class'=>'form-control'))!!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('image','صوره الطبيب : ') !!}
                            {!!Form::file('image',array('class'=>'form-control'))!!}
                        </div>

            {!! Form::submit('اضافة',array('class'=>'btn btn-success btn-lg'))!!}

            {!!Form::close()!!}
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>



</body>
</html>