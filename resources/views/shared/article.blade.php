
<div class="row">
    <div class="col-md-6">
        <a href="{{ route('articles.show', $article->id) }}"><h5>{{ $article->title }}</h5></a>
    </div>
    <div class="col-md-4 hidden-sm hidden-xs">
        <span>作者：{{ $article->user_id }}</span>
        <span>时间: {{ $article->created_at->diffForHumans() }}</span>
    </div>
    <div class="col-md-2">
        <!-- 编辑按钮 -->
        <a class="btn btn-primary" href="{{ route('articles.edit', $article->id) }}" style="display: inline-block;">编辑</a>
        <!-- 删除按钮 -->
        <form action="{{ route('articles.destroy', $article->id) }}" method="post" style="display: inline-block;">
            {{ csrf_field() }}
            {{ method_field('DELETE') }}
            <button type="submit" class="btn btn-danger">删除</button>
        </form>
    </div>
</div>
