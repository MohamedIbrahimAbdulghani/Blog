@extends('layouts.layout')

@section('content')
        <h1>{{ $post->title }}</h1>
        <p>{{ $post->description }}</p>
        <a href="/" class="btn btn-success">Back</a>
@endsection
