@extends('layouts.app')

@section('content')
<div class="container">
        <h1>{{ $post->title }}</h1>
        <p>{{ $post->description }}</p>
        <a href="/" class="btn btn-success">Back</a>
</div>
@endsection
