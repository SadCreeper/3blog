@extends('layouts.app')

@section('title', "$article->title")

@section('content')
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">
        <h3>{{ $article->title }}</h3>
        <span>作者：{{ $article->user_id }}</span>
        <span>时间: {{ $article->created_at }}</span>
    </h3>
  </div>
  <div class="panel-body">
    {{ $article->content }}
  </div>
</div>
@endsection
