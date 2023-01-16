@extends('layouts.main')

@section('container')
  <div class="container pt-5">
    <article class="mt-5">
      <h2>{{ $post["title"] }}</h2>
      <h5>{{ $post["author"] }}</h5>
      <p>{{ $post["body"] }}</p>
    </article>
  </div>

    <a href="/posts">Back to Posts</a>
@endsection