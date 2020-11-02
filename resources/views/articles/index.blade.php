@extends('app')

@section('title','記事一覧')
@include('nav')
@section('content')
  <div class="container">
    @foreach($articles as $article)
      <!-- Card -->
      <div class="card card-cascade wider reverse mt-3">
      <!-- Card image -->
        <div class="view view-cascade overlay">
          <img class="card-img-top" src="{{$article->image}}" alt="Card image cap" height="380" width="360">
          <a href="#!">
            <div class="mask rgba-white-slight"></div>
          </a>
        </div>
        <!-- Card content -->
        <div class="card-body card-body-cascade text-center">
          <!-- Title -->
          <h4 class="card-title"><strong>
            {{$article->title}}
          </strong></h4>
          <!-- Subtitle -->

          <!-- Text -->
          <p class="card-text">
            本文
          </p>
          <div class="font-weight-bold indigo-text py-2">
            {{$article->user->name}}
            {{ $article->created_at->format('Y/m/d H:i') }} {{--この行を変更--}}
          </div>
        </div>
      </div>
    @endforeach
  </div>
<!-- Card -->
@endsection
