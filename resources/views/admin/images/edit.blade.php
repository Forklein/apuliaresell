@extends('admin.home')

@section('rightDashboard')
<h1>Edit image</h1>
<form method="post" action="{{route('admin.images.update', $image->id)}}" enctype="multipart/form-data">
  @method('PATCH')
  @csrf
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" class="form-control" id="name" name="name" placeholder="Image name" value="{{$image->name}}">
  </div>
  <div class="form-group">
    <label>Select Mode</label>
    <select class="form-control" id="mode">
      <option  @if(strpos($image->image, "public") !== false) selected @endif value="file">File</option>
      <option @if(strpos($image->image, "public") === false) selected @endif value="link">Link</option>
    <input class="mt-2 {{(strpos($image->image, "public") !== false) ? '' : 'd-none' }}" type="file" id="image-file" name="image">
    <input class="mt-2 {{(strpos($image->image, "public") === false) ? '' : 'd-none' }}form-control" value="{{($image->image) ?? ''}}" type="text" id="image-link" name="image" placeholder="Image link">
  </div>
  <div class="form-group">
    <label for="category">Category</label>
    <select class="form-control" id="category" name="category_id">
      @foreach($categories as $category)
      <option @if($image->category_id == $category->id) selected @endif value="{{$category->id}}">{{$category->name}}</option>
      @endforeach
    </select>
  </div>
  <div class="form-group">
    <label for="visibility">Visibility</label>
    <select class="form-control" id="visibility" name="visibility">
      <option @if(!$image->visibility) selected @endif value="0">No</option>
      <option @if($image->visibility) selected @endif value="1">Yes</option>
    </select>
  </div>
  <button type="submit" class="btn btn-primary">Update</button>
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
      link.classList.add('d-block');
      link.value = '';
    }else{
      file.classList.remove('d-none');
      link.classList.remove('d-block');
    }
  })
</script>
@endsection