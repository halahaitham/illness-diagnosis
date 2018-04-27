<div class="modal-dialog" >
    {!! Form::open(['route' =>[ 'symptoms.update',$category->id],'method' => 'PATCH','files'=>true]) !!}

    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">update illness</h5>
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