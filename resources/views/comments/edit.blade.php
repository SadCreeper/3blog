@extends('layouts.app')

@section('title', '编辑评论')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <h3>编辑评论</h3>

            @include('shared.errors')

            <form action="{{ route('comments.update', $comment->id) }}" method="post" >
                {{ csrf_field() }}
                {{ method_field('PATCH') }}
                    <input type="hidden" name="article_id" value="{{ $comment->article->id }}">
                    <input type="hidden" name="user_id" value="{{ Auth::id() }}">
                    <div class="form-group">
                        <textarea class="form-control" rows="3" name="content">{{ $comment->content }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-default">确定</button>
            </form>
            
        </div>
    </div>
</div>
@endsection
