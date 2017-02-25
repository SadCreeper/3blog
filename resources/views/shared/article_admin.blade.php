@extends('shared.article')

@section('buttons')
<!-- 编辑按钮 -->
<a class="btn btn-primary" href="{{ route('articles.edit', $article->id) }}" style="display: inline-block;">编辑</a>
<!-- 删除按钮 -->
<form action="{{ route('articles.destroy', $article->id) }}" method="post" style="display: inline-block;">
    {{ csrf_field() }}
    {{ method_field('DELETE') }}
    <button type="submit" class="btn btn-danger">删除</button>
</form>
@endsection
