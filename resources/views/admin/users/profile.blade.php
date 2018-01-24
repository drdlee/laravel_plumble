@extends('layouts.app')
@section('content')
  <div class="panel panel-default">
    @include('layouts.errors')
    <div class="panel-heading">
      User Profile
    </div>
    <div class="panel-body">
      <form class="" action="{{route('user.profile.update')}}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" name="name" value="{{$user->name}}" class="form-control">
        </div>

        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" name="email" value="{{$user->email}}" class="form-control">
        </div>

        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" name="password" class="form-control">
        </div>

        <div class="form-group">
          <label for="avatar">Upload new avatar</label>
          <input type="file" name="avatar" class="form-control">
        </div>

        <div class="form-group">
          <label for="about">About Me</label>
          <textarea name="about" rows="6" class="form-control">{{$user->profile->about}}</textarea>
        </div>

        <div class="form-group">
          <label for="facebook">Facebook</label>
          <input type="text" name="facebook" value="{{$user->profile->facebook}}" class="form-control">
        </div>

        <div class="form-group">
          <label for="youtube">Youtube</label>
          <input type="text" name="youtube" value="{{$user->profile->youtube}}" class="form-control">
        </div>

        <button type="submit" name="button" class="btn btn-success">Submit</button>
      </form>
    </div>
  </div>
@endsection
