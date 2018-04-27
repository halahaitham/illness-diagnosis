@extends('admin.layout.iindex')
@section('content')


    <div class="navbar" style="padding-left:45em">
        <a class="navbar-brand" href="#" style="font-size: x-large ; padding-left: 5em"> الامراض</a>
        <br>
        <br>
        <br>
        <br>
        <ul class="nav navbar-nav" >

            <table class="table table-striped" >


            @if(!empty($category))
                @forelse($category as $categories)

                      <tr>

                          <td>
                              <form action="{{route('category.destroy',$categories->id)}}" method="post">
                                  {{csrf_field()}}
                                  {{method_field('delete')}}
                                  <input class="btn btn-sm btn-danger" type="submit" value="delete"/>

                              </form>
                          </td>


                         <td>
                             <div style="font-size: x-large">

                                 <li>
                                     <ol>
                                         <a href="{{route('category.show',$categories->id)}}">{{$categories->name}}</a>
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
        <a class="btn btn-primary btn-lg" data-toggle="modal" href="#modal-id">اضافة مرض</a>
</span>
        <div class="modal fade" id="modal-id">


            <div class="modal-dialog" >
                {!! Form::open(['route'=>'category.store','method' => 'post']) !!}

                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">add illness</h5>
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

    <!--symptoms which in show method in categorycontroller-->
    @if(!empty($symptoms))
        <section>

            <table class="table table-hover">

                <thead>
                <tr>
                    <th><h4>symptoms</h4></th>
                </tr>
                </thead>
                <tbody>
                @forelse($symptoms as $symptom)
                    <tr>
                        <td>{{$symptom->name}}</td>
                    </tr>
                @empty
                    <h3>
                        no data
                    </h3>
                @endforelse
                </tbody>
            </table>

        </section>
    @endif

@endsection





































