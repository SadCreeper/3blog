<div class="row">
    <div class="col-md-8">
        <p><b>{{ $comment->user_id }}</b></p>
        <p>{{ $comment->content }}</p>
        <p>{{ $comment->created_at }}</p>
    </div>
    <div class="col-md-4">
        @yield('link')
        <!-- 编辑按钮 -->
        <a class="btn btn-primary" href="{{ route('comments.edit', $comment->id) }}" style="display: inline-block;">编辑</a>
        <!-- 删除按钮 -->
        <form action="{{ route('comments.destroy', $comment->id) }}" method="post" style="display: inline-block;">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <button type="submit" class="btn btn-danger">删除</button>
        </form>
    </div>
</div>

<hr>
