
@extends('layouts.layout')

@section('content')

<h1>Hello Into My Blog</h1>

<section class="w-20">
<h1>Current Users</h1>

<ul>
    @foreach($users as $user)
        <li>{{ $user->name }}</li>
    @endforeach
</ul>

</section>

<section class="w-80">
    <a href="{{ route('posts.create') }}" class="btn btn-success mb-2">Create A New Post</a>
@foreach ($posts as $post)
    <article>
        <input type="hidden" name="id" value="{{ $post->id }}">
        <a href="posts/{{ $post->id }}">{{ $post->title }}</a>
        <p>{{ $post->description }}</p>
    </article>
@endforeach

</section>

@endsection
