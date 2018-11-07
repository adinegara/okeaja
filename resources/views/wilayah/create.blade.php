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
    <h4>Tambah Wilayah</h4>
    <br>

	{!! Form::open(['action' => 'WilayahController@store', 'method' => 'POST']) !!}
    	
    	<div class="form-group">
    			{{Form::label('provinsi', 'Provinsi')}}
    			{{Form::text('provinsi', '' , ['class' => 'form-control', 'placeholder' => 'Nama provinsi'])}}
    	</div>

    	<div class="form-group">
    			{{Form::label('kabupaten', 'Kabupaten')}}
    			{{Form::text('kabupaten', '' , ['class' => 'form-control', 'placeholder' => 'Nama Kabupaten'])}}
    	</div>

    	<div class="form-group">
    			{{Form::label('kecamatan', 'Kecamatan')}}
    			{{Form::text('kecamatan', '' , ['class' => 'form-control', 'placeholder' => 'Nama Kecamatan'])}}
    	</div>

    	<div class="form-group">
    			{{Form::label('deskripsi', 'Deskripsi')}}
    			{{Form::textarea('deskripsi', '' , ['class' => 'form-control', 'placeholder' => 'Deskripsi'])}}
    	</div>



    			{{Form::submit('Submit', ['class' => 'btn btn-primary'])}}

	{!! Form::close() !!}



@endsection