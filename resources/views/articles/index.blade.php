@extends('layouts.app')

@section('title', '我的文章')

@section('content')

<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">文章列表</h3>
  </div>
  <div class="panel-body">
    @each('shared.article_admin', $articles, 'article')
  </div>
</div>
{{ $articles->render() }}

@endsection
