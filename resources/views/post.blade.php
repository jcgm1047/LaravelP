@extends('template')

@section('content')
    <h1>{{ $posts->title }}</h1>
    <p>
        {{ $posts->body }}
    </p>
@endsection
