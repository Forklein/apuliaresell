@extends('admin.home')

@section('title', '-Categories')
@section('rightDashboard')
<div class="header">   
  <h2>Categories</h2>
  <a class="btn btn-success" href="{{route('admin.categories.create')}}">
      <i class="fas fa-plus-circle">&nbsp;Add Category</i>
  </a>
</div>
<table class="table shadow mt-2">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Color</th>
        <th scope="col">Created</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($categories as $category)
      <tr>
        <th scope="row">{{$loop->iteration}}</th>
        <td>{{$category->name}}</td>
        <td><span class="badge" style="background-color: {{$category->color}}">{{$category->color}}</span></td>
        <td>{{$category->get_date($category->created_at)}}</td>
      </tr>
    @endforeach
    </tbody>
</table>
@endsection