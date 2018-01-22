@extends('layouts.app')
@section('content')
  @include('layouts.errors')
  <div class="panel panel-default">
    <div class="panel-heading">Edit category : {{$category->name}}</div>
    <div class="panel-body">
      <form action="{{route('category.update', ['id'=>$category->id])}}" method="POST">
        {{csrf_field()}}
        <div class="form-group">
          <label for="name">Category Name</label>
          <input type="text" name="name" class="form-control" value="{{$category->name}}">
        </div>
        <button type="submit" class="btn btn-success">Submit</button>
      </form>
    </div>
  </div>
@endsection
