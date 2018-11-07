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
                <a class="nav-link" href="/wilayah/create">
                    <span class="no-icon">Tambah Wilayah &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</span>
        		</a>
        	</li>
        </ul>

    </div> 

    <h4>Index Wilayah</h4>

	<br>

	@foreach($wilayah as $wilayahs)
		<div class="card">
			<h3><a href="/wilayah/{{$wilayahs->id_wilayah}}">{{$wilayahs->kecamatan}}</a></h3>
			<small>Written On {{$wilayahs->created_at}}</small>
		</div>
	@endforeach
	{{$wilayah->links()}}




@endsection