@extends('admin.layout.iindex')
@section('content')


<h1 style="text-align: center; color:blue"><i>مواعيد الأطباء</i></h1>
<br>

        @foreach($specialism as $item)
        <table class="table" style="background-color:whitesmoke; font-size: large;"dir="rtl">
            <thead >
            <tr>

                <td style="font-size: larger;  "><b>* {{$item->name}}</b></td>

            </tr>
            </thead>
            <tbody>

            @foreach($item->schedual as $it)
                <tr>
                <td scope="row" style="padding-right: 3em">~</td>
                <td>{{$it->doctor_name}}</td>
                <td>{{$it->day}}</td>
                <td>{{$it->from}}</td>
                <td>{{$it->to}}</td>

            </tr>
@endforeach
            </tbody>
        </table>
            @endforeach

<div  style="padding-right: 3em">
<form action="{{route('schedual.create')}}" method="get">
    <input class="btn btn-success btn-lg" type="submit" value="اضافه موعد"/>
</form>
</div>


@endsection