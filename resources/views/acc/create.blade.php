@extends('layout.okeaja.admin')

@section('content')
	<div class="navbar navbar-expand-lg  " id="navigation"> 

        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="/acc">
                    <span class="no-icon">Index Acc &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  </span>
                </a>
            </li>
        </ul>
    </div>
    <hr>
    <h4>Tambah Acc</h4>
    <br>

	{!! Form::open(['action' => 'AccController@store', 'method' => 'POST']) !!}
    	
    	<div class="form-group">
    			{{Form::label('submit_id', 'Submit Id')}}
    			{{Form::number('submit_id', '' , ['class' => 'form-control', 'placeholder' => 'Submit Id'])}}
    	</div>

    	<div class="form-group">
    			{{Form::label('status_acc', 'Status Acc')}}
    			{{Form::select('status_acc', ['No' => 'No', 'Yes' => 'Yes'], '', ['placeholder' => 'Pilih status Acc'] )}}
    	</div>

    			{{Form::submit('Submit', ['class' => 'btn btn-primary'])}}

	{!! Form::close() !!}



@endsection