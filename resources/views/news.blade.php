@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @foreach($data as $news)
            <div class="card mb-2">
                <div class="card-header"><a href="{{ route('news.show', ['id' => $news->id]) }}">{{ $news->title }}</a></div>
                <div class="card-body">
                    {{ $news->content }}
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
