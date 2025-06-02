
@extends('layouts.layout')

@section('content')

<h1>Hello Into My Blog</h1>

<a href="{{ route('posts.create') }}" class="btn btn-secondary mb-2">Create A New Post</a>


<section class="w-80">
@foreach ($posts as $post)
    <article>
        <input type="hidden" name="id" value="{{ $post->id }}">
        <a href="posts/{{ $post->id }}">{{ $post->title }}</a>
        <p>{{ $post->description }}</p>
    </article>
@endforeach


</section>




@endsection
