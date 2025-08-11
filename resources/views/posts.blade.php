
@extends('layouts.app')

@section('content')


    <div class="container">
        @auth  <!-- it is meaning if it make authentication in my website or it is has account in my website  -->
            <h1>Hello {{ Auth::user()->name }} Into My Blog</h1>
            @else <!-- it it meaning if it don't make authentication in my website or it is don't has account in my website ( guest )  -->
                <h1>Hello In My Blog</h1>
        @endauth

    {{-- Start Success Message --}}
    @if(session()->has('success'))
        <div class="alert alert-success text-center">
            {{ session()->get('success') }}
        </div>
    @endif
    {{-- End Success Message --}}
<section class="w-20">
<h1>Current Users</h1>

<ul>
    @foreach($users as $user)
        <li>{{ $user->name }} </li>

    @endforeach
</ul>

</section>

<section class="w-80">
    @auth
        <a href="{{ route('posts.create') }}" class="btn btn-success mb-2">Create A New Post</a>
    @endauth
@foreach ($posts as $post)
    <article>
        <input type="hidden" name="id" value="{{ $post->id }}">
        <a href="posts/{{ $post->id }}">{{ $post->title }}</a>
        <p>{{ $post->description }}</p>
        {{-- to get data from database and show it in website --}}
        <img src="{{ asset('images/'.$post->image) }}" style="width: 100px; height: 100px" alt="">

        {{-- this div is important div this is to get data from another tables about relationships --}}
        <div class="user-data">
            <p>User Name Is : {{ $post->user->name  }}</p>
            <p>Phone Is : {{ $post->user->phone->phone_number  }}</p>
            <p>National Number Is : {{ $post->user->national_number->National_Number  }}</p>
        </div>

        <a href="posts/{{ $post->id }}/edit" class="btn btn-info mt-3">Edit</a>
        <form action="{{ route('posts.delete', $post->id) }}" method="post" class="d-inline">
            @csrf
            @method('DELETE')
            <input type="submit" value="Delete" class="btn btn-danger d-inline-block mt-3">
        </form>

    </article>
@endforeach

</section>
    </div>

@endsection
