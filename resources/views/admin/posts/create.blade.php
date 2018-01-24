@extends('layouts.app')
@section('content')
  @include('layouts.errors')

  <div class="panel panel-default">

    <div class="panel-heading">Create a new post</div>

    <div class="panel-body">
      <form action="{{route('post.store')}}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group">
          <label for="title">Title</label>
          <input type="text" name="title" class="form-control">
        </div>

        <div class="form-group">
          <label for="featured">Featured Image</label>
          <input type="file" name="featured" class="form-control">
        </div>

        <div class="form-group">
          <label for="category">Select a category</label>
          <select class="form-control" name="category_id">
            @foreach ($categories as $category)
              <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
          </select>
        </div>

        <div class="form-group">
          <label for="tags">Select tags</label>
          @foreach($tags as $tag)
            <div class="checkbox">
              <label> <input type="checkbox" name="tags[]" value="{{$tag->id}}"> {{$tag->tag}} </label>
            </div>
          @endforeach
        </div>

        <div class="form-group">
          <label for="content">Content</label>
          <textarea name="content" class="form-control" id="content"></textarea>
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-success">Submit</button>
        </div>
      </form>
    </div>
  </div>
@endsection

@section('style')
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" />
@endsection

@section('scripts')
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('#content').summernote();
    });
  </script>
@endsection
