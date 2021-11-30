@extends('admin.home')

@section('rightDashboard')
    <h1>Images</h1>
    <a href="{{route('admin.images.create')}}">Create a new image</a>
    @foreach ($images as $image)
    <div class="image d-flex justify-content-between align-items-center">
        <p class="m-0">{{$image->name}}</p>
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
            <img src="{{asset("storage/$image->image")}}" alt="{{$image->name}}" style="width: 100px; height: 100px">
        </div>
    </div>
    @endforeach
@endsection