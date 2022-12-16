@extends('template')

@section('content')
    <div class="max-w-3xl mx-auto">

        <h1 class="text-5xl mb-8">{{ $posts->title }}</h1>
        <p class="leading-lg text-lg text-gray-700">
            {{ $posts->body }}
        </p>


    </div>
@endsection
