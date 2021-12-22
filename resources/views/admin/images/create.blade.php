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
    <label>Select Mode</label>
    <select class="form-control" id="mode">
      <option value="file">File</option>
      <option value="link">Link</option>
    <input class="mt-2" type="file" id="image-file" name="image" placeholder="Image link">
    <input class="mt-2 d-none form-control" type="text" id="image-link" name="image" placeholder="Image link">
  </div>
  <div class="form-group">
    <label for="category">Category</label>
    <select class="form-control" id="category" name="category_id">
      @foreach($categories as $category)
      <option value="{{$category->id}}">{{$category->name}}</option>
      @endforeach
    </select>
  </div>
  <div class="form-group">
    <label for="visibility">Visibility</label>
    <select class="form-control" id="visibility" name="visibility">
      <option value="0">No</option>
      <option value="1">Yes</option>
    </select>
  </div>
  <button type="submit" class="btn btn-primary">Add image</button>
  <a href="{{route('admin.images.index')}}" class="btn btn-primary">Back</a>
</form>
@endsection
@section('scripts')
<script>
  const select = document.getElementById('mode');
  const file = document.getElementById('image-file');
  const link = document.getElementById('image-link');
  select.addEventListener('change', function(){
    if(this.value == 'link'){
      file.classList.add('d-none');
      link.classList.add('d-block')
    }else{
      file.classList.remove('d-none')
      link.classList.remove('d-block')
    }
  })
</script>
@endsection