@extends('backend.index')
@section('content')

<section class="content-header">
  <h1>
    Dashboard
    <small>Edit Category</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="{{url('admin')}}"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Edit Category</li>
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

    <div class="col-sm-6">
      <form method="post" action="{{url('updateCategory')}}/{{$maindata->id}}">
        {{ csrf_field() }}
        <input type="hidden" name="tbl" value="{{encrypt('categories')}}">
        <input type="hidden" name="id" value="{{$maindata->id}}">
       	
       	<div class="form-group">
       		<label>Title</label>
       		<input type="text" name="title" value="{{$maindata->title}}" class="form-control">
       	</div>

        <div class="form-group">
          <label>Status</label>
          <select class="form-control" name="status">
            <option>{{$maindata->status}}</option>
            @if($maindata->status == 'off')
            <option>on</option>
            @else
            <option>off</option>
            @endif
          </select>
        </div>
       	
       	<div class="form-group">
       		<button class="btn btn-success">Update Category</button>
       	</div>
      </form>
    </div>
    <div class="col-sm-6">
      <table class="table table-striped table-hover">
        <thead>
          <tr>
            <th>SN</th>
            <th>Title</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody>
          @foreach($data as $key=>$category)
          <tr>
            <td>{{++$key}}</td>
            <td>{{$category->title}}</td>
            <td>{{$category->status}}</td>  
            <td><a href="{{url('editCategory')}}/{{$category->id}}" class="btn btn-success"><i class="fa fa-edit"></i></a>
              <a href="{{url('deleteCategory')}}/{{$category->id}}" class="btn btn-danger"><i class="fa fa-trash"></i></a>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</section>

@stop
 