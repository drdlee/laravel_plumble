@extends('layouts.app')
@section('content')
  <div class="panel panel-default">
    <div class="panel-body">
      <table class="table table-hover">
        <thead>
          <th>Category Name</th>
          <th>Options</th>
        </thead>
        <tbody>
          @foreach ($categories as $category)
            <tr>
              <td>{{$category->name}}</td>
              <td>
                <a href="{{route('category.edit', ['id'=> $category->id])}}" class="btn btn-xs btn-info">edit</a>
                <a href="{{route('category.delete', ['id'=> $category->id])}}" class="btn btn-xs btn-danger">delete</a>
              </td>
            </tr>
          @endforeach
        </tbody>


      </table>
    </div>
  </div>
@endsection
