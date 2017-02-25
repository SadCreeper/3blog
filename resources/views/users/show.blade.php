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
        <img src="{{ Auth::user()->icon }}" alt="">
    @endif
    <!-- 编辑按钮 -->

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
      更换头像
    </button>

    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">更换头像</h4>
          </div>
          <div class="modal-body">
              <form action="{{ route('users.update', Auth::id()) }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                {{ method_field('PATCH') }}
                <div class="form-group">
                  <label for="exampleInputFile">上传图片</label>
                  <input type="file" id="exampleInputFile" name="icon">
                </div>
                <button type="submit" class="btn btn-default">确定</button>
              </form>
          </div>
        </div>
      </div>
    </div>

    <p>{{ $user->name }}</p>


  </div>
</div>
@endsection
