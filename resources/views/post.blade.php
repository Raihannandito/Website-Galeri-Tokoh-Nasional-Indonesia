@extends('layouts.main')
@section('container')
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-8">   
                        <h1 class="mb-3">{{ $post->title }}</h1>
                        <p>By : <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in 
                            <a href="/posts?category={{ $post->category->slug }}" class="text-decoration-none">{{ $post->category->name }}</a></p> 
                        @if ($post->image)
                        <div style="max-height: 350px; overflow: hidden">
                            <img src="{{ asset('storage/' . $post->image) }}" class="card-img-top" alt="{{ $post->category->name }}">
                        </div>
                        @else
                        <img src="{{ asset('img/image.jpg') }}" class="card-img-top" alt="{{ $post->category->name }}">
                        @endif
                        <article class="my-3 fs-8">
                        {!! $post->body !!}
                        </article>       
                    <a href="/posts" class="d-block mt-3 text-decoration-none">&laquo; Back to post!</a>
                </div>
            </div>
        </div>
@endsection