@extends('layout.okeaja.admin')

@section('content')
	
	<div class="navbar navbar-expand-lg  " id="navigation"> 

        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="/wilayah">
                    <span class="no-icon">Index Wilayah </span>
        		</a>
        	</li>
        	<li class="nav-item">
                <a class="nav-link" href="/wilayah/{{$wilayah->id_wilayah}}/edit">
                    <span class="no-icon">Edit Wilayah &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </span>
        		</a>
        	</li>
        </ul>

    </div>
	<hr>
	<h4>Id = {{$wilayah->id_wilayah}}</h4>
	<h4>Provinsi = {{$wilayah->provinsi}}</h4>
	<h4>Kabupaten = {{$wilayah->kabupaten}}</h4>
	<h4>Kecamatan = {{$wilayah->kecamatan}}</h4>
	<h4>Deskripsi = {{$wilayah->deskripsi}}</h4>
	<small>Written On {{$wilayah->created_at}}</small>

	<br>
	<br>

	<hr>

	{!!Form::open(['action' => ['WilayahController@destroy', $wilayah->id_wilayah], 'method' => 'POST', 'class' => 'pull-right'])!!}

	{{Form::hidden('_method', 'DELETE')}}

	{{Form::submit('Delete', ['class' => 'btn btn-danger'])}}

	{!! Form::close() !!}


@endsection