<div class="row">
    <div class="col-md-8">
        <p><b>{{ $comment->user_id }}</b></p>
        <p>{{ $comment->content }}</p>
        <p>{{ $comment->created_at }}</p>
    </div>
    <div class="col-md-4">
        @yield('buttons')
        
    </div>
</div>

<hr>
