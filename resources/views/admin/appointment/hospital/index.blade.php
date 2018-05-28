@extends('admin.layout.iindex')
@section('content')


    <div class="navbar" style="padding-left:45em">
        <a class="navbar-brand" href="#" style="font-size: x-large ; padding-left: 5em"> المستشفيات</a>
        <br>
        <br>
        <br>
        <br>
        <ul class="nav navbar-nav" >

            <table class="table table-striped" >


                @if(!empty($hospital))
                    @forelse($hospital as $item)

                        <tr>

                            <td>
                                <form action="{{route('hospital.destroy',$item->id)}}" method="post">
                                    {{csrf_field()}}
                                    {{method_field('delete')}}
                                    <input class="btn btn-sm btn-danger" type="submit" value="delete"/>

                                </form>
                            </td>


                            <td>
                                <div style="font-size: x-large">

                                    <li>
                                        <ol>
                                            <a href="{{route('hospital.index',$item->id)}}">{{$item->name}}</a>
                                        </ol>
                                    </li>
                                </div>
                            </td>


                        </tr>

    </div>
    @empty
        <h3>no data</h3>

        @endforelse
        @endif
        </ul>
        </tr>
        </table>


        <span style="padding-right: 20em">
        <a class="btn btn-primary btn-lg" data-toggle="modal" href="#modal-id">اضافة مستشفى</a>
</span>
        <div class="modal fade" id="modal-id">


            <div class="modal-dialog" >
                {!! Form::open(['route'=>'hospital.store','method' => 'post']) !!}

                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">add hospital</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                    <div class="modal-body">
                        <div class="form-group">
                            {!! Form::label('name', 'name') !!}
                            {!!Form::text('name', null, array('class'=>'form-control'))!!}
                        </div>


                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Save changes</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>

                {!! Form::close() !!}

            </div>
        </div>
        </div>


@endsection





































