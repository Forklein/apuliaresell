@extends('admin.home')

@section('title', '-Images')
@section('rightDashboard')
    <div class="header">   
        <h2>Images</h2>
        <a class="btn btn-success" href="{{route('admin.images.create')}}">
            <i class="fas fa-plus-circle">&nbsp;Add Image</i>
        </a>
    </div>
    @foreach ($images as $image)
    <div class="d-flex justify-content-between align-items-center my-2 p-2 shadow">
        <div class="name-category">
            <p class="m-0">{{$image->name}}</p>
            <span class="badge" style="background-color: {{$image->category->color}}">{{$image->category->name}}</span>
        </div>
        <div class="action">
            <form class="data" method="POST" action="{{route('admin.images.destroy', $image->id)}}">
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