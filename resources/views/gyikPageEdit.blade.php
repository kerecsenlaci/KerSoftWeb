@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center ">
        <div class="col-10">
        	
	        	<form method="post" action="{{ route('gyik.update', ['id' => $data->id]) }}">
				    {{ method_field('PUT') }}
				    {{ csrf_field() }}
				    <div class="row">
				    <div class="col-8">
			        	<div class="form-group">
			                <label for="exampleInputEmail1">Cím:</label>
			                <input type="text" class="form-control form-control-sm" name="title" value="{{ $data->title }}">
			             </div>
			             <div class="form-group">
			                <label for="exampleInputEmail1">Üzenet:</label>
			                <textarea class="form-control form-control-sm" name="content" rows="15">{{ $data->content }}</textarea>
			            </div>
		        	</div>
			        <div class="col-4">
			        	<div class="card">
			        		<div class="card-header">Inforbációk:</div>
			                <div class="card-body">
			                    Hír kelte: {{ $data->created_at }}
			                    Utolsó módosítás: {{ $data->updated_at }}
			                    <hr>
				                <a href='{{ url("gyik") }}' class="btn btn-danger  btn-block my-2">Mégse</a>
				                <button class="btn btn-success btn-block" type="submit">Mentés</button> 	
			                </div>
			        	</div>
			        </div>
			        </div>
		    	</form>
        </div>
    </div>
</div>
@endsection