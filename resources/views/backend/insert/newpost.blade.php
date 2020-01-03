@extends('backend.index')
@section('content')

<section class="content-header">
  <h1>
    Dashboard
    <small>New Post</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="{{url('admin')}}"><i class="fa fa-dashboard"></i>Home</a></li>
    <li class="active">New Post</li>
  </ol>
</section>

<section class="content">
  <div class="row">
    @if(Session::has('message'))
    <div class="col-sm-12">
      <div class="alert alert-success alert-dismissable">
        {{ session::get('message') }}
        <a href="#" class="close" data-dismiss="alert" style="text-decoration: none">&times;</a>
      </div>
    </div>
    @endif

    <div class="col-sm-12">
      <form method="post" action="{{url('addPost')}}" enctype="multipart/form-data">
        {{ csrf_field() }}
        <input type="hidden" name="tbl" value="{{encrypt('contents')}}">
        <div class="form-group">
          <label>Slogan</label>
          <textarea type="text" name="slogan" class="form-control" rows="10"></textarea>
        </div>
       	<div class="form-group">
       		<label>Description</label>
       		<textarea type="text" name="description" class="form-control" rows="10"></textarea>
       	</div>
        <div class="form-group">
          <input type="file" accept="image/*" name="image" id="file" onchange="loadFile(event)" style="display: none">
        <label for="file" style="cursor: pointer">Featured Image</label>
        <img id="output" width="200" />
        </div>
        <div class="form-group">
          <label>Category</label>
          <select class="form-control" name="category">
            <option>home</option>
            @foreach($cats as $cat)
            <option>{{$cat->title}}</option>
            @endforeach
            <option>contact us</option>
          </select>
        </div>
        <div class="form-group">
          <label>Status</label>
          <select class="form-control" name="status">
            <option>on</option>
            <option>off</option>
          </select>
        </div>
       	
       	<div class="form-group">
       		<button class="btn btn-success">Add Post</button>
       	</div>
      </form>
    </div>
    
  </div>
</section>
<script>
	var loadFile = function(event) {
		var image = document.getElementById('output');
		image.src = URL.createObjectURL(event.target.files[0]);
	};
</script>
<script src="{{url('public/backend/ckeditor/ckeditor.js')}}"></script>
<script>
  CKEDITOR.replace('slogan', {});
  CKEDITOR.replace('description', {});
</script>
@stop
 