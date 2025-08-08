
@extends('layouts.app')

@section('content')

{{ auth::user()->function_to_returned_phone }}
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
        <a href="posts/{{ $post->id }}/edit" class="btn btn-info">Edit</a>

        <form action="{{ route('posts.delete', $post->id) }}" method="post" class="d-inline">
            @csrf
            @method('DELETE')
            <input type="submit" value="Delete" class="btn btn-danger d-inline-block">
        </form>

    </article>
@endforeach

</section>
    </div>

@endsection
