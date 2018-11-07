@extends('layout.okeaja.admin')

@section('content')
	<div class="navbar navbar-expand-lg  " id="navigation"> 

        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="/submit">
                    <span class="no-icon">Index Submit &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  </span>
                </a>
            </li>
    
        </ul>

    </div>
    
    <br>
    <h4>Edit Submit</h4>

    <br>
	<br>

	{!! Form::open(['action' => ['SubmitController@update', $submit->id_submit], 'method' => 'POST']) !!}
    	
    	<div class="form-group">
                {{Form::label('nama_objek', 'Nama Objek')}}
                {{Form::text('nama_objek', $submit->nama_objek , ['class' => 'form-control', 'placeholder' => 'Nama Objek'])}}
        </div>

        <div class="form-group">
                {{Form::label('alamat', 'Alamat')}}
                {{Form::text('alamat', $submit->alamat , ['class' => 'form-control', 'placeholder' => 'Alamat'])}}
        </div>

        <div class="form-group">
                {{Form::label('htm', 'Harga Tiket Masuk')}}
                {{Form::number('htm', $submit->htm , ['class' => 'form-control', 'placeholder' => 'Harga Tiket Masuk // Kosongkan jika tidak tahu'])}}
        </div>

        <div class="form-group">
                {{Form::label('buka', 'Jam Buka')}}
                {{Form::time('buka', $submit->buka , ['class' => 'form-control', 'placeholder' => 'Jam Buka // Kosongkan jika tidak tahu'])}}
        </div>

        <div class="form-group">
                {{Form::label('tutup', 'Jam Tutup')}}
                {{Form::time('tutup', $submit->tutup , ['class' => 'form-control', 'placeholder' => 'Jam Tutup // Kosongkan jika tidak tahu'])}}
        </div>

    			{{Form::hidden('_method', 'PUT')}}
    			{{Form::submit('Submit', ['class' => 'btn btn-primary'])}}

	{!! Form::close() !!}



@endsection