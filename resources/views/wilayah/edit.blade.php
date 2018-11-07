@extends('layout.okeaja.admin')

@section('content')
	<div class="navbar navbar-expand-lg  " id="navigation"> 

        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="/wilayah">
                    <span class="no-icon">Index Wilayah &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  </span>
                </a>
            </li>
        </ul>
    </div>
    <hr>
    <h4>Edit Wilayah</h4>
    <br>

	{!! Form::open(['action' => ['WilayahController@update', $wilayah->id_wilayah], 'method' => 'POST']) !!}
    	
    	<div class="form-group">
    			{{Form::label('provinsi', 'Provinsi')}}
    			{{Form::text('provinsi', $wilayah->provinsi , ['class' => 'form-control', 'placeholder' => 'Nama provinsi'])}}
    	</div>

    	<div class="form-group">
    			{{Form::label('kabupaten', 'Kabupaten')}}
    			{{Form::text('kabupaten', $wilayah->kabupaten , ['class' => 'form-control', 'placeholder' => 'Nama Kabupaten'])}}
    	</div>

    	<div class="form-group">
    			{{Form::label('kecamatan', 'Kecamatan')}}
    			{{Form::text('kecamatan', $wilayah->kecamatan , ['class' => 'form-control', 'placeholder' => 'Nama Kecamatan'])}}
    	</div>

    	<div class="form-group">
    			{{Form::label('deskripsi', 'Deskripsi')}}
    			{{Form::textarea('deskripsi', $wilayah->deskripsi , ['class' => 'form-control', 'placeholder' => 'Deskripsi'])}}
    	</div>

    			{{Form::hidden('_method', 'PUT')}}
    			{{Form::submit('Submit', ['class' => 'btn btn-primary'])}}

	{!! Form::close() !!}



@endsection