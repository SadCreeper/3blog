@extends('layouts.app')

@section('title', '我的评论')

@section('content')

<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">评论列表</h3>
  </div>
  <div class="panel-body">
    @each('shared.comment_admin', $comments, 'comment')
  </div>
</div>
{{ $comments->render() }}

@endsection
