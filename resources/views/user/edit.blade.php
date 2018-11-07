@extends('layout.okeaja.admin')

@section('content')
	<div class="navbar navbar-expand-lg  " id="navigation"> 

        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="/user">
                    <span class="no-icon">Index User &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  </span>
                </a>
            </li>
    
        </ul>

    </div>
    
    <br>
    <h4>Edit User</h4>

    <br>
	<br>

	{!! Form::open(['action' => ['UserController@update', $users->id], 'method' => 'POST']) !!}
    	
    	<div class="form-group">
    			{{Form::label('name', 'Nama')}}
    			{{Form::text('name', $users->name , ['class' => 'form-control', 'placeholder' => 'Nama'])}}
    	</div>

    	<div class="form-group">
    			{{Form::label('email', 'E-mail')}}
    			{{Form::text('email', $users->email , ['class' => 'form-control', 'placeholder' => 'email@mail.com'])}}
    	</div>

    	<div class="form-group">
    			{{Form::label('password', 'Password')}}
    			{{Form::text('password', $users->password , ['class' => 'awesome', 'placeholder' => 'Password'])}}
    	</div>

    			{{Form::hidden('_method', 'PUT')}}
    			{{Form::submit('Submit', ['class' => 'btn btn-primary'])}}

	{!! Form::close() !!}



@endsection