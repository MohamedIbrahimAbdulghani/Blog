
@extends('layouts.layout')

@section('content')

<h2 class="text-center mt-3">Edit Post <span style="color: red">( {{ $post->title }} )</span></h2>

    {{-- Start Error Message --}}
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    {{-- End Error Message --}}

    {{-- Start Success Message --}}
    @if(session()->has('success'))
        <div class="alert alert-success text-center">
            {{ session()->get('success') }}
        </div>
    @endif
    {{-- End Success Message --}}



<form action="{{ route('posts.update',$post->id) }}" method="post">
  @csrf  <!-- this is very important to make this form done -->
  {{-- <div class="mb-3">
    <input type="text" class="form-control" name="image" id="image" placeholder="Please Enter Image Name">
    </div> --}}
    @method('PUT')
  <div class="mb-3">
    <input type="text" class="form-control" name="title" id="title" placeholder="Please Enter Title" value="{{ $post->title }}">
  </div>
    <div class="mb-3">
    <input type="description" class="form-control" name="description" id="description" placeholder="Please Enter Description" value="{{ $post->description }}">
  </div>
  <button type="submit" class="btn btn-primary m-auto d-table">Update</button>
</form>

@endsection
