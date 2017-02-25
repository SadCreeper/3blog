@extends('shared.comment')

@section('link')
<!-- 跳转按钮 -->
<a class="btn btn-primary" href="{{ route('articles.show', $comment->article->id) }}" style="display: inline-block;">跳转文章</a>
@endsection
