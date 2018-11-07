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
                <a class="nav-link" href="/objek/create">
                    <span class="no-icon">Tambah Objek &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</span>
        		</a>
        	</li>
        </ul>
    </div>
	<hr>
	<h4>Index Objek</h4>
	<br>

	@foreach($objek as $objeks)
		<div class="card">
			<h3><a href="/objek/{{$objeks->id_objek}}">{{$objeks->nama_objek}}</a></h3>
			<small>Created at {{$objeks->created_at}}</small>
		</div>
	@endforeach
	{{$objek->links()}}



@endsection