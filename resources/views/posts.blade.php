
@extends('layouts.main')
@section('container')

        <h1 class="mb-4 text-center">{{ $title }}</h1>
        <div class="row justify-content-center mb-3">
          <div class="col-md-6">
            <form action="/posts">
              @if (request('category'))
                <input type="hidden" name="category" value="{{ request('category') }}">
                @endif
              @if (request('author'))
                <input type="hidden" name="author" value="{{ request('author') }}">
                @endif
              <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Search" name="search" value="{{ request('search') }}" autocomplete="off">
                <button class="btn btn-outline-secondary" type="submit">Search</button>
              </div>
            </form>
          </div>
        </div>
        @if($posts->count())
        <div class="card mb-3">
          @if ($posts[0]->image)
          <div style="max-height: 350px; overflow: hidden">
              <img src="{{ asset('storage/' . $posts[0]->image) }}" class="card-img-top" alt="{{ $posts[0]->category->name }}">
          </div>
          @else
          <img src="img/image.jpg" class="card-img-top" alt="{{ $posts[0]->category->name }}">
          @endif 
            <div class="card-body text-center">
              <h3 class="card-title"><a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none text-dark">{{ $posts[0]->title }}</a></h3>
              <p>
                <small class="text-muted">
                By : <a href="/posts?author={{ $posts[0]->author->username }}" class="text-decoration-none">{{ $posts[0]->author->name }}</a> in 
                <a href="/posts?category={{ $posts[0]->category->slug }}" class="text-decoration-none">{{ $posts[0]->category->name }}</a>
                {{ $posts[0]->created_at->diffForHumans() }}
                </small>
                </p>
              <p class="card-text">{{ $posts[0]->excerpt }}</p>
              <a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none btn btn-primary">Read more</a>
            </div>
          </div>
          <div class="container">
            <div class="row">
                @foreach ($posts->skip(1) as $post)
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="position-absolute px-3 py-1 text-white" style="background-color: rgba(0, 0, 0, 0.7)">
                          <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none text-white">{{ $post->category->name }}</a></div>
                      @if ($post->image)
                          <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top" alt="{{ $post->category->name }}">
                      @else
                      <img src="img/image.jpg" class="card-img-top" alt="{{ $post->category->name }}">
                      @endif
                        <div class="card-body">
                          <h5 class="card-title"><a href="/posts/{{ $post->slug }}" class="text-decoration-none text-dark">{{ $post->title }}</a></h5>
                          <p>
                            <small class="text-muted">
                            By : <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> 
                            {{ $post->created_at->diffForHumans() }}
                            </small>
                            </p>
                          <p class="card-text">{{ $post->excerpt }}</p>
                          <a href="/posts/{{ $post->slug }}" class="btn btn-primary">Read more</a>
                        </div>
                      </div>
                </div>
                @endforeach
            </div>
          </div>
          @else
          <p class="text-center fs-4">No post found.</p>
      @endif    
      <div class="d-flex justify-content-end">
      {{ $posts->links() }}
      </div>
@endsection