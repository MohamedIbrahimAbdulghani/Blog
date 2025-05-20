
@extends('layouts.layout')

@section('content')

<h1>Hello Into My Blog</h1>

<section class="w-80">
    <article>
        <a href="posts/post-1">Post 1 Blog Title</a>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Inventore repudiandae sapiente assumenda iure quam eum animi delectus saepe sed optio ducimus veritatis tempore, atque adipisci similique possimus architecto cupiditate. Dolorem!</p>
    </article>

    <article>
        <a href="posts/post-2">Post 2 Blog Title</a>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Inventore repudiandae sapiente assumenda iure quam eum animi delectus saepe sed optio ducimus veritatis tempore, atque adipisci similique possimus architecto cupiditate. Dolorem!</p>
    </article>

    <article>
        <a href="posts/post-3">Post 3 Blog Title</a>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Inventore repudiandae sapiente assumenda iure quam eum animi delectus saepe sed optio ducimus veritatis tempore, atque adipisci similique possimus architecto cupiditate. Dolorem!</p>
    </article>

<h2 class="title">i will go to school by my new car</h2>

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
