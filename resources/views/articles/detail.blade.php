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


    <h5 id="message-form" style="padding-top:30px;">发表您的评论</h5>
    @include('shared.errors')
    <form action="{{ route('comments.store') }}" method="post" >
        {{ csrf_field() }}
        @if(Auth::check())
            <input type="hidden" name="article_id" value="{{ $article->id }}">
            <input type="hidden" name="user_id" value="{{ Auth::id() }}">
            <div class="form-group">
                <textarea class="form-control" rows="3" name="content"></textarea>
            </div>
            <button type="submit" class="btn btn-default">发表</button>
        @else
            <a class="btn btn-primary" style="margin-left:10px" href="{{ url('/login') }}">登录发表评论</a>
        @endif
    </form>

    <p style="padding-top:30px;"><b>评论</b></p><hr>
    @each('shared.comment', $comments, 'comment')
  </div>
</div>
@endsection
