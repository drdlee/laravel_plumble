@extends('layouts.app')
@section('content')
  @include('layouts.errors')

  <div class="panel panel-default">

    <div class="panel-heading">Edit Post : {{$post->title}}</div>

    <div class="panel-body">
      <form action="{{route('post.update', ['id'=>$post->id])}}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group">
          <label for="title">Title</label>
          <input type="text" name="title" class="form-control" value="{{ $post->title }}">
        </div>

        <div class="form-group">
          <label for="featured">Featured Image</label>
          <input type="file" name="featured" class="form-control" value="{{$post->featured}}">
        </div>

        <div class="form-group">
          <label for="category">Select a category</label>
          <select class="form-control" name="category_id">
            @foreach ($categories as $category)
              <option value="{{ $category->id }}"
                @if ($post->category->id == $category->id)
                  selected
                @endif
                >{{ $category->name }}</option>
            @endforeach
          </select>
        </div>


        <div class="form-group">
          <label for="tags">Select tags</label>
          @foreach($tags as $tag)
            <div class="checkbox">
              <label> <input type="checkbox" name="tags[]" value="{{$tag->id}}"
                  @foreach($post->tags as $t)
                    @if($tag->id == $t->id)
                      checked
                    @endif
                  @endforeach
                > {{$tag->tag}} </label>
            </div>
          @endforeach
        </div>

        <div class="form-group">
          <label for="content">Content</label>
          <textarea name="content" class="form-control">{{$post->content}}</textarea>
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-success">Submit</button>
        </div>
      </form>
    </div>

  </div>
@endsection
