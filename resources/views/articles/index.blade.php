@extends('app')

@section('title','記事一覧')
@include('nav')
@section('content')
  <div class="container mb-5">
    @foreach($articles as $article)
      @include('articles.card')
    @endforeach
  </div>
@endsection
