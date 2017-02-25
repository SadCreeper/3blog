
<div class="row">
    <div class="col-md-6">
        <a href="{{ route('articles.show', $article->id) }}"><h5>{{ $article->title }}</h5></a>
    </div>
    <div class="col-md-4 hidden-sm hidden-xs">
        <span>作者：{{ $article->user_id }}</span>
        <span>时间: {{ $article->created_at->diffForHumans() }}</span>
    </div>
    <div class="col-md-2">
        @yield('buttons')
    </div>
</div>
