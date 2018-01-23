@if(Auth::check())
  <div class="col-md-4">
    <ul class="list-group">
      <li class="list-group-item"><a href="{{route('home')}}">Home</a></li>
      <li class="list-group-item"><a href="{{route('category.index')}}">Categories</a></li>
      <li class="list-group-item"><a href="{{route('post.index')}}">All Posts</a></li>
      <li class="list-group-item"><a href="{{route('post.trashed')}}">Trashed Posts</a></li>
      <li class="list-group-item"><a href="{{route('category.create')}}">Create category</a></li>
      <li class="list-group-item"><a href="{{route('post.create')}}">Create new post</a></li>
    </ul>
  </div>
@endif
