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
    
    <br>
	<h4>Edit Acc</h4>

	<br>
	<br>

	{!! Form::open(['action' => ['AccController@update', $acc->id_acc], 'method' => 'POST']) !!}
    	
    	<div class="form-group">
    			{{Form::label('status_acc', 'Status Acc')}}
    			{{Form::select('status_acc', ['No' => 'No', 'Yes' => 'Yes'], $acc->status_acc )}}
    	</div>
    			{{Form::hidden('_method', 'PUT')}}
    			{{Form::submit('Submit', ['class' => 'btn btn-primary'])}}

	{!! Form::close() !!}



@endsection