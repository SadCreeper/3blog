@extends('layouts.app')

@section('title', "$user->name")

@section('content')
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">
        个人信息
    </h3>
  </div>
  <div class="panel-body">
    @if ($user->icon == '')
        <img src="/img/icon/default.jpg" alt="">
    @else
        <img src="" alt="">
    @endif
    <!-- 编辑按钮 -->
    <p><a class="btn btn-primary" href="" style="display: inline-block;">更换头像</a></p>

    <p>{{ $user->name }}</p>


  </div>
</div>
@endsection
