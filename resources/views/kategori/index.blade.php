@extends('layout.okeaja.admin')

@section('content')
	
	 <div class="navbar navbar-expand-lg  " id="navigation"> 

        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="/kategori">
                    <span class="no-icon">Index Kategori </span>
        		</a>
        	</li>
        	<li class="nav-item">
                <a class="nav-link" href="/kategori/create">
                    <span class="no-icon">Tambah Kategori &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</span>
        		</a>
        	</li>
        </ul>

    </div> 

    <h4>Index Kategori</h4>

	<br>

	@foreach($kategori as $kategoris)
		
			<h5><a href="/kategori/{{$kategoris->id_kategori}}">{{$kategoris->Nama}}</a></h5>
			<small>Written On {{$kategoris->created_at}}</small>
			<hr>
	@endforeach
	{{$kategori->links()}}

	<hr>



@endsection