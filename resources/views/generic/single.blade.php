@extends('layouts.master')

@section('content')
    <div class="main-content">
        <article class="article">
            <header class="article__header">
                @if($post->hasPostThumbnail)
                    <img src="{{ $post->thumbnail->url }}" class="post-thumbnail">
                @endif

                <h1 class="text--lg">{{ $post->title }}</h1>
                <time datetime="{{ $post->dateTime }}">{{ $post->date }} | {{ $post->time }}</time>
                <span>( By. {{ $post->author->nickname }} )</span>
            </header>

            <div class="article__content">
                {!! $post->content !!}
            </div>
        </article>
    </div>
@endsection