@extends('layouts.app')
@section('content')
  @include('layouts.errors')
  <div class="panel panel-default">
    <div class="panel-heading">Create User</div>
    <div class="panel-body">
      <form action="{{route('user.store')}}" method="POST">
        {{csrf_field()}}

        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" name="name" class="form-control">
        </div>

        <div class="form-group">
          <label for="name">Email</label>
          <input type="email" name="email" class="form-control">
        </div>

        <button type="submit" class="btn btn-success">Submit</button>
      </form>
    </div>
  </div>
@endsection
