@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center ">
        <div class="col-10">
        	<div class="row">
        	<div class="col-8">
	        	<div class="card">
	        		<div class="card-header">{{ $data->title }}</div>
	                <div class="card-body">
	                    {{ $data->content }}
	                </div>
	        	</div>
	        </div>
	        <div class="col-4">
	        	<div class="card">
	        		<div class="card-header">Inforbációk:</div>
	                <div class="card-body">
	                    Hír kelte: {{ $data->created_at }}
	                    Utolsó módosítás: {{ $data->updated_at }}
	                    @auth
	                    <hr>
		                    <a href='{{ url("news/$data->id/edit") }}' class="btn btn-primary  btn-block my-2">Módosítás</a>
		                    <form method="post" action="{{ route('news.destroy', ['id' => $data->id]) }}">
		                    	{{ method_field('DELETE') }}
		                    	{{ csrf_field() }}
		                    	<button class="btn btn-danger btn-block" type="submit">Törlés</button>
		                   	</form>
		                @endauth
	                </div>
	        	</div>
	        </div>
	    </div>
        </div>
    </div>
</div>
@endsection