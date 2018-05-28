<!doctype html>
<html class="no-js" lang="en" dir="ltr">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="x-ua-compatible" content="ie=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>
        @yield('title','Plus')

    </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="{{asset('dist/css/foundation.css')}}"/>
    <link rel="stylesheet" href="{{asset('dist/css/app.css')}}"/>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">

</head>


<body>
<div  class="top-bar">
    <div style="color:white" class="top-bar-left">
        <h4 class="brand-title">
            <a href="{{route('index')}}">
                <i class="fa fa-home fa-lg" aria-hidden="true">
                </i>
                Pluse
            </a>
        </h4>
    </div>
    <div class="top-bar-right">
        <ol class="menu">
            <li>
                <a href="{{route('index')}}">
                    الرئيسية
                </a>
            </li>
            <li>
                <a href="{{route('index')}}">
                    التشخيص
                </a>
            </li>
            <li>
                <a href="{{url('frontspecialism')}}">

                    الحجز
                </a>
            </li>

        </ol>
    </div>
</div>


<!--///////////////////////////////////////////////////////////////-->
<div class="hero text-center" >
    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item">
                <img class="d-block w-100" src="{{asset('images/que.jpg')}}"  alt="Second slide">
            </div>
            <div class="carousel-item active">
                <img class="d-block w-100" src="{{asset('images/lovely.png')}}" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{asset('images/hek.png')}}"  alt="Third slide">
            </div>
        </div>
    </div>
</div>

<!--///////////////////////////////////////////////////////////////-->
<br/>
<div class="subheader text-center">
    <h2>
        <strong>
            <a href="{{url('frontspecialism')}}" style="color: ">

               MAKE AN APPOINTMENT

            </a>
        </strong>
    </h2>
</div>
<HR>
<div style="background-color: whitesmoke; ">
    <div style="padding-left: 20em; padding-right: 20em; padding-top: 2em;">

        <form action="/search" method="post" >
            {{csrf_field()}}
            <input type="text" name="search" placeholder="what is your symptoms..">
            <input type="submit" value="search" class="btn btn-info">
        </form>
    </div>



@yield('content')
</div>

<footer class="footer">
    <div class="row full-width">
        <div class="small-12 medium-4 large-4 columns">
            <i class="fi-laptop"></i>
            <H4>WE CARE ABOUT YOUR HEALTH</H4>
        </div>
        <div class="small-12 medium-4 large-4 columns">

            <h4>Plus نبذه عن    </h4>
            <p>هو منصه الكترونيه تساعد في حل المشاكل الطبيه  </p>
            <p>حيث يساعد في تشخيص بعض الامراض </p>
            <p>وحجز موعد للكشف  عند الطبيب </p>
            <p>وقراء التحاليل الطبيه </p>
        </div>

        <div class="small-6 medium-4 large-4 columns">
            <h4>Follow Us</h4>
            <ul class="footer-links">

                <li><a href="#">Facebook</a></li>
                <li><a href="#">Twitter</a></li>
                <ul>
        </div>
    </div>
</footer>


<script src="{{asset('dist/js/vendor/jquery.js')}}"></script>
<script src="{{asset('dist/js/app.js')}}"></script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
