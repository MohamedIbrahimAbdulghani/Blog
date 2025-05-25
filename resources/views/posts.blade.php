
@extends('layouts.layout')

@section('content')

<h1>Hello Into My Blog</h1>

<section class="w-80">
@foreach ($posts as $post)
    <article>
        <a href="posts/post-1">{{ $post->title }}</a>
        <p>{{ $post->description }}</p>
    </article>
@endforeach


</section>


<section class="w-20">
    <h2>Current Users</h2>
    {{-- $users as variable returned data from database in web file  --}}
    @foreach ($users as $user)
    <ul>
        <li>{{ $user->name }}</li>
    </ul>
    @endforeach

</section>

<section class="image-section">
    <img src="{{ asset('images/a1d54c8c-cafc-4715-b446-95c2645dc459.jpg') }}" alt="">
</section>

@endsection
