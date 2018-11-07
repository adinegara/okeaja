@extends('layouts.subs')

@section('content')


	{!! Form::open(['action' => 'SubmitController@store', 'method' => 'POST']) !!}
    	
    	<div class="form-group">
    			{{Form::label('nama_objek', 'Nama Objek')}}
    			{{Form::text('nama_objek', '' , ['class' => 'form-control', 'placeholder' => 'Nama Objek'])}}
    	</div>

    	<div class="form-group">
    			{{Form::label('alamat', 'Alamat')}}
    			{{Form::text('alamat', '' , ['class' => 'form-control', 'placeholder' => 'Alamat'])}}
    	</div>

    	<div class="form-group">
    			{{Form::label('htm', 'Harga Tiket Masuk')}}
    			{{Form::number('htm', '' , ['class' => 'form-control', 'placeholder' => 'Harga Tiket Masuk // Kosongkan jika tidak tahu'])}}
    	</div>

    	<div class="form-group">
    			{{Form::label('buka', 'Jam Buka')}}
    			{{Form::time('buka', '' , ['class' => 'form-control', 'placeholder' => 'Jam Buka // Kosongkan jika tidak tahu'])}}
    	</div>

        <div class="form-group">
                {{Form::label('tutup', 'Jam Tutup')}}
                {{Form::time('tutup', '' , ['class' => 'form-control', 'placeholder' => 'Jam Tutup // Kosongkan jika tidak tahu'])}}
        </div>


    			{{Form::submit('Submit', ['class' => 'btn btn-custom'])}}

	{!! Form::close() !!}



@endsection