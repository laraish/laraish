@extends('layouts.master')

@section('content')
    <div class="main-content">
        @foreach($posts as $post)
            <div>
                <a href="{{ $post->permalink }}">{{ $post->title }}</a>
            </div>
        @endforeach
    </div>
@endsection
