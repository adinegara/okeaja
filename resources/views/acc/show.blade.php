@extends('layout.okeaja.admin')

@section('content')
	
	<div class="navbar navbar-expand-lg  " id="navigation"> 

        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="/acc">
                    <span class="no-icon">Index Acc </span>
        		</a>
        	</li>
        	<li class="nav-item">
                <a class="nav-link" href="/acc/{{$acc->id_acc}}/edit">
                    <span class="no-icon">Edit Acc &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </span>
        		</a>
        	</li>
        </ul>

    </div>
	<hr>
	<h3>Id Acc = {{$acc->id_acc}}</h3>
	<h5>ID Submits = {{$acc->submit_id}}</h5>
	<h5>Status Acc = {{$acc->status_acc}}</h5>
	<small>Written On {{$acc->created_at}}</small>

	<br>
	<br>

	<hr>

	{!!Form::open(['action' => ['AccController@destroy', $acc->id_acc], 'method' => 'POST', 'class' => 'pull-right'])!!}

	{{Form::hidden('_method', 'DELETE')}}

	{{Form::submit('Delete', ['class' => 'btn btn-danger'])}}

	{!! Form::close() !!}


@endsection