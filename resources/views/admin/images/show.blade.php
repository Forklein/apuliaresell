@extends('admin.home')

@section('rightDashboard')
<div class="card">
    <div class="card-header">
        {{$image->name}}
    </div>
    <div class="card-body">
        @if(strpos($image->image, "public") !== false)
        <img src="{{url("storage/$image->image")}}" alt="{{$image->name}}" style="width: 100px; height: 100px">
        @else
        <img src="{{$image->image}}" alt="{{$image->name}}" style="width: 100px; height: 100px">
        @endif
    </div>
    <div class="card-footer d-flex">
        <div class="info">
            <p>Visibility: {{($image->visibility) ? 'Visible' : 'Not Visibile'}}</p>
            <p>Created at: {{$image->get_date($image->created_at)}}</p>
        </div>
    </div>
</div>
@endsection