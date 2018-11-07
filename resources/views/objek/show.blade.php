@extends('layout.okeaja.admin')

@section('content')
	
	<div class="navbar navbar-expand-lg  " id="navigation"> 

        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="/objek">
                    <span class="no-icon">Index Objek </span>
        		</a>
        	</li>
        	<li class="nav-item">
                <a class="nav-link" href="/objek/{{$objek->id_objek}}/edit">
                    <span class="no-icon">Edit Objek &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp </span>
        		</a>
        	</li>
        </ul>

    </div>
	<hr>
	
	<hr>

	<h4>Nama Objek= {{$objek->nama_objek}}</h4>
	<h5>ID objek = {{$objek->id_objek}}</h5>
	<h5>ID Acc = {{$objek->acc_id}}</h5>
	<h5>ID Kategori = {{$objek->kategori_id}}</h5>
	<h5>ID Wilayah = {{$objek->wilayah_id}}</h5>
	<h5>Harga Tiket Masuk = {{$objek->htm}}</h5>
	<h5>Jarak (Km) = {{$objek->jarakKm}}</h5>
	<h5>Jam Buka = {{$objek->buka}}</h5>
	<h5>Jam Tutup = {{$objek->tutup}}</h5>
	<h5>Deskripsi = {{$objek->deskripsi}}</h5>

	<small>Written On {{$objek->created_at}}</small>

	<br>
	<br>

	<hr>

	{!!Form::open(['action' => ['ObjekController@destroy', $objek->id_objek], 'method' => 'POST', 'class' => 'pull-right'])!!}

	{{Form::hidden('_method', 'DELETE')}}

	{{Form::submit('Delete', ['class' => 'btn btn-danger'])}}

	{!! Form::close() !!}


@endsection