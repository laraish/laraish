@extends('layouts.master')

@section('content')
    <div class="main-content">
        <article class="article">
            <header class="article__header">
                <h1 class="text--lg">{{ $post->title }}</h1>
            </header>

            <div class="article__content">
                {!! $post->content !!}
            </div>
        </article>
    </div>
@endsection