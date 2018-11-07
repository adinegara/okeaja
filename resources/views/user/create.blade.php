@extends('layout.layout')

@section('content')
	<a href="/user" class="btn btn"> Home </a>
	<hr>
	<h1>Create User</h1>

	<br>
	<br>

	{!! Form::open(['action' => 'UserController@store', 'method' => 'POST']) !!}
    	
    	<div class="form-group">
    			{{Form::label('name', 'Nama')}}
    			{{Form::text('name', '' , ['class' => 'form-control', 'placeholder' => 'Nama'])}}
    	</div>

    	<div class="form-group">
    			{{Form::label('email', 'Email')}}
    			{{Form::email('email', '' , ['class' => 'form-control', 'placeholder' => 'email@mail.com'])}}
    	</div>

    	<div class="form-group">
    			{{Form::label('password', 'Password')}}
    			{{Form::password('password', '' , ['class' => 'awesome', 'placeholder' => 'Password'])}}
    	</div>


    			{{Form::submit('Submit', ['class' => 'btn btn-primary'])}}

	{!! Form::close() !!}



@endsection