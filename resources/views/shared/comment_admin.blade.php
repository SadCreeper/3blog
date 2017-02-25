@extends('shared.comment')

@section('buttons')
<!-- 跳转按钮 -->
<a class="btn btn-primary" href="{{ route('articles.show', $comment->article->id) }}" style="display: inline-block;">跳转文章</a>
<!-- 编辑按钮 -->
<a class="btn btn-primary" href="{{ route('comments.edit', $comment->id) }}" style="display: inline-block;">编辑</a>
<!-- 删除按钮 -->
<form action="{{ route('comments.destroy', $comment->id) }}" method="post" style="display: inline-block;">
    {{ csrf_field() }}
    {{ method_field('DELETE') }}
    <button type="submit" class="btn btn-danger">删除</button>
</form>
@endsection
