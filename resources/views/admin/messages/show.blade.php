@extends('admin.home')

@section('rightDashboard')
<div class="card">
    <div class="card-header">
        {{$message->name}}
        {{$message->surname}}
    </div>
    <div class="card-body">
        <p>{{$message->description}}</p>
    </div>
    <div class="card-footer d-flex">
        <div class="info">
            <p>Email: {{$message->email}}</p>
            <p>Created at: {{$message->get_date($message->created_at)}}</p>
        </div>
    </div>
</div>
@endsection