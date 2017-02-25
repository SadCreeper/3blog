@extends('layouts.app')

@section('title', '我的消息')

@section('content')

<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">消息列表</h3>
  </div>
  <div class="panel-body">
      @foreach ($notices as $notice)
        <p><a href="{{ route('articles.show', $notice->link) }}">{{ $notice->content }}</a></p>
      @endforeach
  </div>
</div>
{{ $notices->render() }}

@endsection
