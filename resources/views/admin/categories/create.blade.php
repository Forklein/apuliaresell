@extends('admin.home')

@section('rightDashboard')
<form method="POST" action="{{route('admin.categories.store')}}">
    @csrf
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" name="name">
    </div>
    <div class="form-group">
        <label for="color">Color</label>
        <input type="color" id="color" name="color">
    </div>
    <button type="submit">Add</button>
</form>
@endsection