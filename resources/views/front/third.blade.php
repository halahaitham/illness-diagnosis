@extends('front.main')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                @foreach($adv as $ad)
                <div class="ohyeah">

                    <img src="{{url('image',$ad->image)}}" width="500%" height="100%">

                </div>
                    @endforeach
            </div>

            <div class="col-md-8">

                <div class="myAchivement">


                        <img src="{{asset('images/medical.jpg')}}" width="600em" height="60%">
                    <br>
                    <br>

                    <h4>{{$symptom}}</h4>





</div>
</div>
</div>
@endsection
