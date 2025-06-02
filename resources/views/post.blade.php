@extends('layouts.layout')

@section('content')


        <h1>{{ isset($title)? $title : 'Welcome In Our Blog' }}</h1>
        <p>{{ $post->description }}</p>
        <a href="/" class="btn btn-success">Back</a>


@endsection
