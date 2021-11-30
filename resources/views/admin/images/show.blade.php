@extends('admin.home')

@section('rightDashboard')
<div class="card">
    <div class="card-header">
        {{$image->name}}
    </div>
    <div class="card-body">
        <img src="{{asset("storage/$image->image")}}" alt="{{$image->name}}" style="width: 100px; height: 100px">
    </div>
    <div class="card-footer d-flex">
        <div class="info">
            <p>Visibility: {{($image->visibility) ? 'Visible' : 'Not Visibile'}}</p>
            <p>Created at: {{$image->get_date($image->created_at)}}</p>
        </div>
    </div>
</div>
@endsection