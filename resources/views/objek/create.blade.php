@extends('layout.okeaja.admin')

@section('content')
	<div class="navbar navbar-expand-lg  " id="navigation"> 

        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="/objek">
                    <span class="no-icon">Index Objek &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  </span>
                </a>
            </li>
        </ul>
    </div>
    <hr>
    <h4>Tambah Objek</h4>
    <br>

	{!! Form::open(['action' => 'ObjekController@store', 'method' => 'POST']) !!}
    	
        <div class="form-group">
                {{Form::label('acc_id', 'Id Acc')}}
                {{Form::number('acc_id', '' , ['class' => 'form-control', 'placeholder' => ''])}}
        </div>

        <div class="form-group">
                {{Form::label('nama_objek', 'Nama Objek')}}
                {{Form::text('nama_objek', '' , ['class' => 'form-control', 'placeholder' => 'Nama Objek'])}}
        </div>

    	<div class="form-group">
    			{{Form::label('kategori_id', 'Id Kategori')}}
    			{{Form::number('kategori_id', '' , ['class' => 'form-control', 'placeholder' => ''])}}
    	</div>

        <div class="form-group">
                {{Form::label('wilayah_id', 'Id Wilayah')}}
                {{Form::number('wilayah_id', '' , ['class' => 'form-control', 'placeholder' => ''])}}
        </div>

    	<div class="form-group">
    			{{Form::label('htm', 'Harga Tiket Masuk')}}
    			{{Form::number('htm', '' , ['class' => 'form-control', 'placeholder' => 'Harga Tiket Masuk // Kosongkan jika tidak tahu'])}}
    	</div>

        <div class="form-group">
                {{Form::label('jarakKm', 'Jarak dari kota (KM)')}}
                {{Form::number('jarakKm', '' , ['class' => 'form-control', 'placeholder' => ''])}}
        </div>

    	<div class="form-group">
    			{{Form::label('buka', 'Jam Buka')}}
    			{{Form::time('buka', '' , ['class' => 'form-control', 'placeholder' => 'Jam Buka // Kosongkan jika tidak tahu'])}}
    	</div>

        <div class="form-group">
                {{Form::label('tutup', 'Jam Tutup')}}
                {{Form::time('tutup', '' , ['class' => 'form-control', 'placeholder' => 'Jam Tutup // Kosongkan jika tidak tahu'])}}
        </div>

        <div class="form-group">
                {{Form::label('deskripsi', 'Deskripsi')}}
                {{Form::text('deskripsi', '' , ['class' => 'form-control', 'placeholder' => 'Deskripsi'])}}
        </div>


    			{{Form::Submit('submit', ['class' => 'btn btn-primary'])}}

	{!! Form::close() !!}



@endsection