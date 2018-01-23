@extends('layouts.app')
@section('content')
  @include('layouts.errors')
  <div class="panel panel-default">
    <div class="panel-heading">Create a tag</div>
    <div class="panel-body">
      <form action="{{route('tag.store')}}" method="POST">
        {{csrf_field()}}
        <div class="form-group">
          <label for="name">Tag Name</label>
          <input type="text" name="name" class="form-control">
        </div>
        <button type="submit" class="btn btn-success">Submit</button>
      </form>
    </div>
  </div>
@endsection
