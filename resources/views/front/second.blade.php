@extends('front.main')
@section('content')

<div class="container">
    <div class="row">

        <div class="col-md-4">
            @foreach($adv as $item)
            <div class="ohyeah">
                <img src="{{url('image',$item->image)}}" width="300em" height="70m"/>

            </div>
            @endforeach
        </div>


        <div class="col-md-8">

            <div class="myAchivement">

                    <img src="{{asset('images/patient.jpg')}}" width="600em" height="60%">
                <br>
                <br>
                @foreach($symptom as $sy)
                    <h6>{{$sy['content_A']}} </h6>
                    <h6>{{$sy['content_B']}} </h6>
                    <h6>{{$sy['content_C']}}  </h6>
                    <h6>{{$sy['content_D']}} </h6>
                    <h6>{{$sy['content_E']}}</h6>
                    <h6>{{$sy['content_F']}}  </h6>
                    <h6>{{$sy['content_G']}}  </h6>
                    <h6>{{$sy['content_H']}} </h6>
                    <h6>{{$sy['content_I']}}  </h6>
                    <h6>{{$sy['content_J']}}  </h6>

<h5 style="color: darkslategray"> هل تعاني على الاقل من واحده او اكثر من هذه الاعراض ؟-</h5>
                    <br>
<h4 style="background-color: yellowgreen; padding-bottom: 0.5em;padding-right: 0.5em; ;">
                        <a href="{{url('yes',['id'=>$sy->id])}}" style="padding-left: 2em; color: darkslategray" >نعم</a>

</h4>

                    <br>
                    <hr>
                @endforeach

            </div>
        </div>
    </div>
</div>
@endsection
