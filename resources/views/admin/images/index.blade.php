@extends('admin.home')

@section('rightDashboard')
    <h1>Images</h1>
    <a href="{{route('admin.images.create')}}">Create a new image</a>
    <div class="image d-flex flex-wrap">
    @foreach ($images as $image)
        <img src="{{$image->image}}" alt="{{$image->name}}">
    @endforeach
    </div>
@endsection