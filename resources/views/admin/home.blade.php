@extends('layouts.app')

@section('content')
<div class="container-fluid p-5">
    <div class="row">
        <div class="col-2 text-center">
            <h2>Welcome back {{Auth::user()->name}}</h2>
            <a class="btn btn-primary" href="{{route('admin.images.index')}}">Images</a>
            <a class="btn btn-primary" href="{{route('admin.messages.index')}}">Messages</a>
        </div>
        <div class="col-10">
            @if(session('alert'))
                <div class="alert {{session('alert')}}">
                    {{session('alert-message')}}
                </div>
            @endif
            @yield('rightDashboard')
        </div>
    </div>
</div>
@endsection
