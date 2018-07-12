@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @foreach($data as $gyik)
            <div class="card mb-2">
                <div class="card-header">{{ $gyik->title }}</div>
                <div class="card-body">
                    {{ $gyik->content }}
                </div>
                @auth
                <div class="card-footer">
                    <div class="row">
                        <div class="col-6">
                            <a href='{{ url("gyik/$gyik->id/edit") }}' class="btn btn-primary btn-block">Edit</a>
                        </div>
                        <div class="col-6">
                            <form method="post" action="{{ route('gyik.destroy', ['id' => $gyik->id]) }}">
                                {{ method_field('DELETE') }}
                                {{ csrf_field() }}
                                <button class="btn btn-danger btn-block" type="submit">Törlés</button>
                            </form>
                        </div>
                    </div>
                </div>
                @endauth
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
