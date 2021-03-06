@extends('admin.home')

@section('title', '-Images')
@section('rightDashboard')
    <div class="header">   
        <a class="btn btn-success" href="{{route('admin.images.create')}}">
            <i class="fas fa-plus-circle">&nbsp;Add Image</i>
        </a>
    </div>
    <div class="row align-items-center my-2 shadow text-white">
        @forelse ($images as $image)
        <div class="col-6 name-category">
            <p class="m-0 h5">Name: {{$image->name}}</p>
            <span>Category: </span><span class="badge text-info" style="background-color: {{$image->category->color ?? ''}}">{{$image->category->name ?? 'No Category'}}</span>
        </div>
        <div class="col-4 action">
            <form class="data" method="POST" action="{{route('admin.images.destroy', $image->id)}}">
                @method('DELETE')
                @csrf
                <a href="{{route('admin.images.show', $image->id)}}" class="btn btn-primary">Show</a>
                <a href="{{route('admin.images.edit', $image->id)}}" class="btn btn-warning mx-2">Edit</a>
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </div>
        <div class="col-2 image text-center p-2">
            @if ($image->contains($image->image, "public"))
            <img src="{{url("storage/$image->image")}}" alt="{{$image->name}}" style="width: 50%; height: 50%">
            @else
            <img src="{{$image->image}}" alt="{{$image->name}}" style="width: 50%; height: 50%">
            @endif
        </div>
        @empty
        <h2>Please add an image</h2>
        @endforelse
    </div>
@endsection

@section('scripts')
<script>
  const forms = document.querySelectorAll('.data');
  forms.forEach((form) => {
    form.addEventListener('submit', function(e){
        e.preventDefault();
        if(window.confirm('Are you sure you want to delete this image?')) this.submit();
    });
  });
</script>
@endsection