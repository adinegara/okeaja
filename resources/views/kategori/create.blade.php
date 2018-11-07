@extends('layout.okeaja.admin')

@section('content')
	<div class="navbar navbar-expand-lg  " id="navigation"> 

        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="/kategori">
                    <span class="no-icon">Index Kategori &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  </span>
        		</a>
        	</li>
        </ul>
    </div>
	<hr>
	<h4>Tambah Kategori</h4>
	<br>

	{!! Form::open(['action' => 'KategoriController@store', 'method' => 'POST']) !!}
    	
    	<div class="form-group">
    			{{Form::label('Nama', 'Nama Kategori')}}
    			{{Form::text('Nama', '' , ['class' => 'form-control', 'placeholder' => 'Nama Kategori'])}}
    	</div>

    			{{Form::submit('Submit', ['class' => 'btn btn-primary'])}}

	{!! Form::close() !!}



@endsection