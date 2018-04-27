@extends('admin.layout.iindex')
@section('content')
    <h2 style="color: #194e86">جدول الامراض</h2>
    <br>
    <br>


    <table class="table table-striped" style="background-color:lavender;">
        <thead>

        </thead>

        <tbody>
        <tr style="font-size:15px; color: #0d6aad">
            <td></td>
            <th >التشخيص نعم</th>
            <th style="padding-left: 12em">التشخيص لا</th>
            <th style="padding-left: 12em">الاعراض</th>
            <th style="padding-left: 12em">الامراض</th>
        </tr>
        @forelse($symptoms as $symptom)
        <tr>
            <td>

                <table>
                    <tr>



                        <td style="padding-top: 1em">
                            <form action="{{route('symptoms.edit',$symptom->id)}}" method="get">
                                {{csrf_field()}}
                                {{method_field('edit')}}
                                <input class="btn btn-sm btn-primary" type="submit" value="edit"  />


                            </form>
                        </td>

                        <td style="padding-bottom: 0.5em">
                            <br>
                            <form action="{{route('symptoms.destroy',$symptom->id )}}" method="post">
                                {{csrf_field()}}
                                {{method_field('delete')}}
                                <input class="btn btn-sm btn-danger" type="submit" value="delete"/>
                            </form>
                        </td>
                    </tr>
                </table>




            </td>
            <td> {{$symptom->diagnosis_yes}}</td>
            <td>{{$symptom->diagnosis_no}}</td>


                <td>

                    <h4>{{$symptom->content_A}}</h4>
                    <h4>{{$symptom->content_B}}</h4>
                    <h4>{{$symptom->content_C}}</h4>
                    <h4>{{$symptom->content_D}}</h4>
                    <h4>{{$symptom->content_E}}</h4>
                    <h4>{{$symptom->content_F}}</h4>
                    <h4>{{$symptom->content_G}}</h4>
                    <h4>{{$symptom->content_H}}</h4>
                    <h4>{{$symptom->content_I}}</h4>
                    <h4>{{$symptom->content_J}}</h4>
                </td>

            <td> <h4> {{$symptom->category}} *</h4></td>


        </tr>
        @empty
            <h3>no data</h3>
        @endforelse

        </tbody>
    </table>



        @endsection













