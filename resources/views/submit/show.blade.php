@extends('layout.okeaja.admin')

@section('content')
	
	<div class="navbar navbar-expand-lg  " id="navigation"> 

        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="/submit">
                    <span class="no-icon">Index Submit </span>
        		</a>
        	</li>
        	<li class="nav-item">
                <a class="nav-link" href="/submit/{{$submit->id_submit}}/edit">
                    <span class="no-icon">Edit Submit &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </span>
        		</a>
        	</li>
        </ul>

    </div>
	<hr>

	<h4>Nama Objek= {{$submit->nama_objek}}</h4>
	<h4>ID Submit = {{$submit->id_submit}}</h4>
	<h4>Id User = {{auth()->user()->id}}</h4>
	<h4>Alamat Objek = {{$submit->alamat}}</h4>
	<h4>Harga Tiket Masuk = {{$submit->htm}}</h4>
	<h4>Jam Buka = {{$submit->buka}}</h4>
	<h4>Jam Tutup = {{$submit->tutup}}</h4>

	<small>Written On {{$submit->created_at}}</small>

	<br>
	<br>

	<hr>

	{!!Form::open(['action' => ['SubmitController@destroy', $submit->id_submit], 'method' => 'POST', 'class' => 'pull-right'])!!}

	{{Form::hidden('_method', 'DELETE')}}

	{{Form::submit('Delete', ['class' => 'btn btn-danger'])}}

	{!! Form::close() !!}


@endsection