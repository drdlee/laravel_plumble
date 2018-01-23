@extends('layouts.app')
@section('content')
  <div class="panel panel-default">
    <div class="panel-heading">
      Tags
    </div>
    <div class="panel-body">
      <table class="table table-hover">
        <thead>
          <th>Tag Name</th>
          <th>Options</th>
        </thead>
        <tbody>
          @if($tags->count() > 0)
            @foreach ($tags as $tag)
              <tr>
                <td>{{$tag->tag}}</td>
                <td>
                  <a href="{{route('tag.edit', ['id'=> $tag->id])}}" class="btn btn-xs btn-info">edit</a>
                  <a href="{{route('tag.delete', ['id'=> $tag->id])}}" class="btn btn-xs btn-danger">delete</a>
                </td>
              </tr>
            @endforeach
          @else
            <tr>
              <th colspan="2" class="text-center">No tags</th>
            </tr>
          @endif
        </tbody>


      </table>
    </div>
  </div>
@endsection
