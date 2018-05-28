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

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('dist/css/app.css')}}"/>


    <title>**</title>




</head>
<body style="background-color: #eff0f3">
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
                <a href="{{url('frontspecialism')}}">
                    الحجز
                </a>
            </li>
            <li>
                <a href="{{route('index')}}">

                    التشخيص
                </a>
            </li>
        </ol>
    </div>
</div>



<br/>
<div class="subheader text-center">


</div>

@yield('content')

<br>
<br>
<br>


<!--footer-->
<footer class="footer">
    <div class="row full-width">
        <div class="small-12 medium-4 large-4 columns">
            <i class="fi-laptop"></i>

            <H4>WE CARE ABOUT YOUR HEALTH</H4>
        </div>
        <div class="small-12 medium-4 large-4 columns">
            <i class="fi-html5"></i>
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


<script src="{{asset('https://code.jquery.com/jquery.js')}}"></script>
<script src="{{asset('https://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js')}}"></script>
<script>
    $(document).ready(function () {
        $(".submenu > a").click(function (e) {
            e.preventDefault();
            var $li = $(this).parent("li");
            var $ul = $(this).next("ul");

            if ($li.hasClass("open")) {
                $ul.slideUp(350);
                $li.removeClass("open");
            } else {
                $(".nav > li > ul").slideUp(350);
                $(".nav > li").removeClass("open");
                $ul.slideDown(350);
                $li.addClass("open");
            }
        });
    });
</script>

</body>
</html>

