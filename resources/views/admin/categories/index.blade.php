@extends('admin.home')

@section('rightDashboard')
<div class="header">   
  <h2>Categirues</h2>
  <a class="btn btn-success" href="{{route('admin.categories.create')}}">
      <i class="fas fa-plus-circle">&nbsp;Add Category</i>
  </a>
</div>
<table class="table shadow">
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
        <td>{{$category->color}}</td>
        <td>{{$category->get_date($category->created_at)}}</td>
      </tr>
    @endforeach
    </tbody>
</table>
@endsection