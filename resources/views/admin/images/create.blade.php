@extends('admin.home')

@section('rightDashboard')
    <h1>Add image</h1>
    <form method="post" action="{{route('admin.images.store')}}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" class="form-control" id="name" name="name" placeholder="Image name">
        </div>
        <div class="form-group">
          <input type="file" id="image" name="image" placeholder="Image link">
        </div>
        <div class="form-group">
            <label for="Visibility">Visibility</label>
            <select class="form-control" id="visibility" name="visibility">
              <option value="0">No</option>
              <option value="1">Yes</option>
            </select>
          </div>
        <button type="submit" class="btn btn-primary">Add image</button>
    </form>
@endsection