@extends('layouts.app')
@section('content')
  <div class="panel panel-default">
    <div class="panel-body">
      <table class="table table-hover">
        <thead>
          <th>Thumbnail</th>
          <th>Title</th>
          <th>Options</th>
        </thead>
        <tbody>
          @foreach ($posts as $post)
            <tr>
              <td> <img src="{{ $post->featured }}" alt="{{ $post->title }}" width="90px" height="50px"> </td>
              <td>{{ $post->title }}</td>
              <td>
                {{-- <a href="{{route('post.edit', ['id'=> $post->id])}}" class="btn btn-xs btn-info">edit</a> --}}
                <a href="{{route('post.delete', ['id'=> $post->id])}}" class="btn btn-xs btn-danger">trash</a>
              </td>
            </tr>
          @endforeach
        </tbody>


      </table>
    </div>
  </div>
@endsection
