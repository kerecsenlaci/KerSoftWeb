@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center ">
        <div class="col-10">
        	
	        	<form method="post" action="{{ route('news.store') }}">
				    {{ method_field('POST') }}
				    {{ csrf_field() }}
				    <div class="row">
				    <div class="col-8">
			        	<div class="form-group">
			                <label for="exampleInputEmail1">Cím:</label>
			                <input type="text" class="form-control form-control-sm" name="title" placeholder="Írd ide a hír címét..." ">
			             </div>
			             <div class="form-group">
			                <label for="exampleInputEmail1">Hír tartalma:</label>
			                <textarea class="form-control form-control-sm" name="content" rows="15" placeholder="Ide a szöveget..."></textarea>
			            </div>
		        	</div>
			        <div class="col-4">
			        	<div class="card">
			        		<div class="card-header">Inforbációk:</div>
			                <div class="card-body">
			                    Hír kelte: 
			                    <br>
			                    Utolsó módosítás: 
			                    <hr>
				                <a href='{{ url("news") }}' class="btn btn-danger  btn-block my-2">Mégse</a>
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