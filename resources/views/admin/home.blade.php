@extends('layouts.app')

@section('content')
<div class="container-fluid h-100">
    <div class="row h-100">
        <div class="col-2 d-flex flex-column p-3 bg-dark text-white">
            <div class="header mb-5">
                <h2 class="text-center">Welcome back {{Auth::user()->name}}</h2>
            </div>
            <div class="py-2">
                <i class="fas fa-home fa-2x mr-2"></i>
                <a class="h4" href="{{route('admin.home')}}">Home</a>
            </div>
            <div class="py-2">
                <i class="fas fa-images fa-2x mr-2"></i>
                <a class="h4" href="{{route('admin.images.index')}}">Images</a>
            </div>
            <div class="py-2">
                <i class="fas fa-envelope-open-text fa-2x mr-2"></i>
                <a class="h4" href="{{route('admin.messages.index')}}">Messages</a>
            </div>
            <div class="py-2">
                <i class="fas fa-book fa-2x mr-2"></i>
                <a class="h4" href="{{route('admin.categories.index')}}">Categories</a>
            </div>
        </div>
        <div class="col-10 p-3 bg-info">
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
