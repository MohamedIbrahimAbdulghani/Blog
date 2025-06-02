
@extends('layouts.layout')

@section('content')

<h2 class="text-center mt-3">Add A New Post</h2>
<form action="{{ route('posts.store') }}" method="post">
  @csrf
  <div class="mb-3">
    <input type="text" class="form-control" name="image" id="image" placeholder="Please Enter Image Name">
    </div>
  <div class="mb-3">
    <input type="text" class="form-control" name="title" id="title" placeholder="Please Enter Title">
  </div>
    <div class="mb-3">
    <input type="description" class="form-control" name="description" id="description" placeholder="Please Enter Description">
  </div>
  <button type="submit" class="btn btn-primary m-auto d-table">Add</button>
</form>

@endsection
