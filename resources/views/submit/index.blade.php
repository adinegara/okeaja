@extends('layout.okeaja.admin')

@section('content')

	<div class="navbar navbar-expand-lg  " id="navigation"> 

        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="/submit">
                    <span class="no-icon">Index Submit </span>
        		</a>
        	</li>
        	<li class="nav-item">
                <a class="nav-link" href="/submit/create">
                    <span class="no-icon">Tambah Submit &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</span>
        		</a>
        	</li>
        </ul>

    </div> 

    <h4>Index Submit</h4>

	<br>

	@foreach($submit as $submits)
		<div class="card">
			<h4><a href="/submit/{{$submits->id_submit}}">{{$submits->nama_objek}}</a></h4>
			<small>Submitted at {{$submits->created_at}}</small>
		</div>
	@endforeach
	{{$submit->links()}}

	<br>
	<br>

	<h5><a href="/submit/create">ADD</a></h5>



@endsection