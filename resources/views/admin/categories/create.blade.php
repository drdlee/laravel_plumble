@extends('layouts.app')
@section('content')
  <div class="panel panel-default">
    <div class="panel-heading">Create a category</div>
    <div class="panel-body">
      <form action="{{route('category.store')}}" method="POST">
        {{csrf_field()}}
        <div class="form-group">
          <label for="name">Category Name</label>
          <input type="text" name="name" class="form-control">
        </div>
        <button type="submit" class="btn btn-success">Submit</button>
      </form>
    </div>
  </div>
@endsection
