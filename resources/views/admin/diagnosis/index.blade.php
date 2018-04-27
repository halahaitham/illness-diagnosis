@extends('admin.layout.iindex')
@section('content')
    <h2 style="color: #194e86">diagnosis</h2>



<table style=" font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%">

    <tr style="background-color: #c4dbef;">
        <td><h3>symptoms</h3></td>
        <td><h3>diagnosis yes</h3></td>
        <td><h3>diagnosis no</h3></td>

        <td></td>
    </tr>

    @forelse($symp as $symps)
        <tr style="background-color: #e2e8e5;">

            <td><h4></h4></td>
            <td><h4>{{$symps['content_yes']}}</h4></td>
            <td><h4>{{$symps->content_no}}</h4></td>

            <td>
                <br>
                <form action="{{route('symptoms.destroy',$symps->id)}}" method="post">
                    {{csrf_field()}}
                    {{method_field('delete')}}
                    <input class="btn btn-sm btn-danger" type="submit" value="delete"/>

                </form>
            </td>
        </tr>
    @empty
        <h3>no data</h3>
    @endforelse
    @endsection
</table>