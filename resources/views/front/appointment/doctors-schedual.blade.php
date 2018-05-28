@extends('front.main')
@section('content')
    <body class="content" >
    <h1 style="text-align: center; color:blue"><i>مواعيد الأطباء</i></h1>
    <br>
        <div class="container" dir="rtl">
            <div class="row" dir="rtl">
                @foreach($specialism as $item)
                <table class="table">

                    <thead class="thead-dark">


                    <tr> </tr>
                    </thead>
                    <tbody>

                    <tr>
                        <td style="font-size:x-large; text-align: center; padding-top: 2em"><b></b></td>

                                <td>
                                    <a class="btn btn-primary btn-lg" href="{{url('button',['id'=>$item->id])}}">
                                       د. {{$item->doctor_name}} <br>
                                        {{$item->day}}<br>
                                        {{$item->to}}
                                        {{$item->from}}to

                                    </a>
                                </td>
                            @endforeach


                    </tr>

                    </tbody>
                </table>



            </div>
        </div>


    <div class="modal fade" tabindex="-1" role="dialog" id="model_id" >
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" >بيانات الحجز</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">



                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Save changes</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>








    @endsection