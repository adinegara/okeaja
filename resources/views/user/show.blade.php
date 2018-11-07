@extends('layout.okeaja.admin')

@section('content')
	
	<div class="navbar navbar-expand-lg  " id="navigation"> 

        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="/user">
                    <span class="no-icon">Index Kategori </span>
        		</a>
        	</li>
        	<li class="nav-item">
                <a class="nav-link" href="/user/{{$users->id}}/edit">
                    <span class="no-icon">Edit User &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </span>
        		</a>
        	</li>
        </ul>

    </div>
	<hr>
	<h4>Id = {{$users->id}}</h4>
	<h4>Nama = {{$users->name}}</h4>
	<h4>Email = {{$users->email}}</h4>
	<h4>Password = {{$users->password}}</h4>
	<small>Written On {{$users->created_at}}</small>

	<br>
	<br>

	<hr>

	{!!Form::open(['action' => ['UserController@destroy', $users->id], 'method' => 'POST', 'class' => 'pull-right'])!!}

	{{Form::hidden('_method', 'DELETE')}}

	{{Form::submit('Delete', ['class' => 'btn btn-danger'])}}

	{!! Form::close() !!}


@endsection