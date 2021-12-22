@extends('admin.home')

@section('rightDashboard')
<div class="card w-25 mx-auto text-center">
    <div class="card-header">
        {{$image->name}}
    </div>
    <div class="card-body">
        @if(strpos($image->image, "public") !== false)
        <img src="{{url("storage/$image->image")}}" alt="{{$image->name}}" class="img-fluid">
        @else
        <img src="{{$image->image}}" alt="{{$image->name}}" class="img-fluid">
        @endif
    </div>
    <div class="card-footer d-flex justify-content-center">
        <div class="info">
            <p>Visibility: {{($image->visibility) ? 'Visible' : 'Not Visibile'}}</p>
            <p>Created at: {{$image->get_date($image->created_at)}}</p>
            <p>Category: {{$image->category->name}}</p>
        </div>
    </div>
    <a href="{{route('admin.images.index')}}" class="btn btn-primary">Back</a>
</div>
@endsection