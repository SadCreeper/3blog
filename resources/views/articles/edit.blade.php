@extends('layouts.app')

@section('title', '编辑文章')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <h3>新增一篇文章</h3>

            @include('shared.errors')

            {{--新增文章表单--}}
            <form action="{{ route('articles.update', $article->id) }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                {{ method_field('PATCH') }}
                <select class="form-control" style="margin-bottom: 20px;" name="category">
                  <option value="">点此选择文章分类</option>
                  @if ($article->category == 1)
                      <option value="1" selected>网站前端开发</option>
                  @else
                      <option value="1">网站前端开发</option>
                  @endif
                  @if ($article->category == 2)
                      <option value="2" selected>网站后端开发</option>
                  @else
                      <option value="2">网站后端开发</option>
                  @endif
                  @if ($article->category == 3)
                      <option value="3" selected>生活随笔</option>
                  @else
                      <option value="3">生活随笔</option>
                  @endif
                </select>
                <input type="hidden" name="user_id" value="{{ Auth::id() }}">
                <input type="text" class="form-control" name="title" placeholder="请填写标题" style="margin-bottom: 20px;" value="{{ $article->title }}">
                <textarea name="content" rows="20" style="width:100%;">{{ $article->content }}</textarea>
                <button type="submit" class="btn btn-default">完成</button>
            </form>





        </div>
    </div>
</div>
@endsection
