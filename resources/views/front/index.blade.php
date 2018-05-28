@extends('layouts.main')

@section('content')
<!doctype html>
<html class="no-js" lang="en" dir="ltr">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="x-ua-compatible" content="ie=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>
       plus
    </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="{{asset('dist/css/foundation.css')}}"/>
    <link rel="stylesheet" href="{{asset('dist/css/app.css')}}"/>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

</head>
<body>


<!-- Latest contaner -->
<!--<div class="container">
    <div class="row">
        <div class="col-md-4"><img src="images/new.png" height="300em" width="400em"/></div>
        <div class="col-md-4"></div>
        <div class="col-md-4"><table class="table table-hover" style="margin-left: 60px">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>

                </tr>
                </thead>
                <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>

                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>

                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td colspan="2">Larry the Bird</td>
                </tr>
                </tbody>
            </table></div>
    </div>
</div>-->
<br>

<div class="container"  style="padding-bottom: 2em">
    <div class="row">



        <div class="col-md-6">

                    <table class="table table-hover" style="margin-left: 60px ; font-size:x-large" >
                        @foreach($cat as $category)
                            <tr>
                                <th scope="row"><a href="#"><<</a></th>
                                <td colspan="2">
                                    <a href="{{url('showw',['id'=>$category->id])}}">
                                        {{$category->name}}
                                    </a>
                                </td>
                            </tr>
                        @endforeach

                    </table>


</div>
        <div class="col-md-6">
                    <img src="images/new.png" height="300em" width="400em"/>


</div>

    </div>
</div>






<!-- Footer -->


@endsection