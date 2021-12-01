@extends('admin.home')

@section('rightDashboard')
    <h1>Images</h1>
    <a href="{{route('admin.images.create')}}">Create a new image</a>
    @foreach ($images as $image)
    <div class="image d-flex justify-content-between align-items-center">
        <div class="name-category">
            <p class="m-0">{{$image->name}}</p>
            <span class="badge" style="background-color: {{$image->category->color}}">{{$image->category->name}}</span>
        </div>
        <div class="action">
            <form class="d-flex" method="POST" action="{{route('admin.images.destroy', $image->id)}}">
                @method('DELETE')
                @csrf
                <a href="{{route('admin.images.show', $image->id)}}" class="btn btn-primary">Show</a>
                <a href="{{route('admin.images.edit', $image->id)}}" class="btn btn-warning mx-2">Edit</a>
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </div>
        <div class="image">
            @if(strpos($image->image, "public") !== false)
            <img src="{{url("storage/$image->image")}}" alt="{{$image->name}}" style="width: 100px; height: 100px">
            @else
            <img src="{{$image->image}}" alt="{{$image->name}}" style="width: 100px; height: 100px">
            @endif
        </div>
    </div>
    @endforeach
@endsection