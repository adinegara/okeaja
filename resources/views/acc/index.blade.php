@extends('layout.okeaja.admin')

@section('content')

	<div class="navbar navbar-expand-lg  " id="navigation"> 

        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="/acc">
                    <span class="no-icon">Index Acc </span>
        		</a>
        	</li>
        	<li class="nav-item">
                <a class="nav-link" href="/acc/create">
                    <span class="no-icon">Tambah Acc &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp</span>
        		</a>
        	</li>
        </ul>

    </div> 

    <h4>Index Acc</h4>

	<br>

	@foreach($acc as $accs)
		<div class="card">
			<h3><a href="/acc/{{$accs->id_acc}}">{{$accs->id_acc}}</a></h3>
			<small>Written On {{$accs->created_at}}</small>
		</div>
	@endforeach
	{{$acc->links()}}




@endsection