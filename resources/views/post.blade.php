@extends('layouts.layout')

@section('content')

@foreach ($users as $user)
        <li>{{ $user }}</li>
@endforeach


        {{-- <h1>{{ $title }}</h1> --}}
        <h1>{{ isset($title)? $title : 'Welcome In Our Blog' }}</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita nemo dolorem inventore voluptatum optio, quisquam possimus sequi sint soluta error tenetur et magnam rerum aut id eius velit molestias mollitia! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Necessitatibus sint rerum reprehenderit, ab ex explicabo saepe est aliquid at excepturi iure alias ducimus. Placeat possimus ducimus optio dolores, qui rerum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita nemo dolorem inventore voluptatum optio, quisquam possimus sequi sint soluta error tenetur et magnam rerum aut id eius velit molestias mollitia! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Necessitatibus sint rerum reprehenderit, ab ex explicabo saepe est aliquid at excepturi iure alias ducimus. Placeat possimus ducimus optio dolores, qui rerum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita nemo dolorem inventore voluptatum optio, quisquam possimus sequi sint soluta error tenetur et magnam rerum aut id eius velit molestias mollitia! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Necessitatibus sint rerum reprehenderit, ab ex explicabo saepe est aliquid at excepturi iure alias ducimus. Placeat possimus ducimus optio dolores, qui rerum.</p>
        <a href="/" class="btn btn-success">Back</a>


@endsection
