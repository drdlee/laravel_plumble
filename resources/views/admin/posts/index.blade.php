@extends('layouts.app')
@section('content')
  <div class="panel panel-default">
    <div class="panel-heading">
      All Posts
    </div>
    <div class="panel-body">
      <table class="table table-hover">
        <thead>
          <th>Thumbnail</th>
          <th>Title</th>
          <th>Options</th>
        </thead>
        <tbody>
          @if($posts->count() > 0)
            @foreach ($posts as $post)
              <tr>
                <td> <img src="{{ $post->featured }}" alt="{{ $post->title }}" width="90px" height="50px"> </td>
                <td>{{ $post->title }}</td>
                <td>
                  <a href="{{route('post.edit', ['id'=> $post->id])}}" class="btn btn-xs btn-info">edit</a>
                  <a href="{{route('post.delete', ['id'=> $post->id])}}" class="btn btn-xs btn-danger">trash</a>
                </td>
              </tr>
            @endforeach
          @else
            <tr>
              <th colspan="3" class="text-center">No published posts</th>
            </tr>
          @endif
        </tbody>


      </table>
    </div>
  </div>
@endsection
