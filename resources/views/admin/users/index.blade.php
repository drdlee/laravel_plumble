@extends('layouts.app')
@section('content')
  <div class="panel panel-default">
    <div class="panel-heading">
      Users
    </div>
    <div class="panel-body">
      <table class="table table-hover">
        <thead>
          <th>Avatar</th>
          <th>Name</th>
          <th>Options</th>
        </thead>
        <tbody>
          @if($users->count() > 0)
            @foreach ($users as $user)
              <tr>
                <td> <img src="{{ asset($user->profile->avatar) }}" alt="{{ $user->name }}" width="60px" height="60px" style="border-radius:50%;"> </td>
                <td>{{ $user->name }}</td>
                <td>
                  {{-- <a href="{{route('post.edit', ['id'=> $post->id])}}" class="btn btn-xs btn-info">edit</a>
                  <a href="{{route('post.delete', ['id'=> $post->id])}}" class="btn btn-xs btn-danger">trash</a> --}}
                </td>
              </tr>
            @endforeach
          @else
            <tr>
              <th colspan="3" class="text-center">No users</th>
            </tr>
          @endif
        </tbody>


      </table>
    </div>
  </div>
@endsection
