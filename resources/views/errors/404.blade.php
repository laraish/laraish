@extends('layouts.master')

@section('content')
    <div class="flex-center full-height">
        <section class="text--center">
            <h1 class="text--xl">404</h1>
            <p>Sorry, the page you are looking for could not be found.</p>
            <a href="{{home_url()}}" class="button">Back to Home</a>
        </section>
    </div>
@endsection
