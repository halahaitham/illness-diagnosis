@extends('admin.layout.iindex')
@section('content')


<h1 style="text-align: center; color:blue"><i>مواعيد الأطباء</i></h1>
<br>

            @foreach($ss->chunk(4) as $chunk)
            <div class="row">
                <div style="padding-left: 5em; padding-right: 5em">
                @foreach($chunk as $item)
                        <a class="btn btn-info btn-lg" href="{{url('adminbutton',['id'=>$item->id])}}">
                            {{$item->doctor_name}}<br>
                            {{$item->day}}<br>
                            {{$item->from}}<br>
                            {{$item->to}}
                        </a>
                @endforeach
                </div>
            </div>
            @endforeach

@endsection