<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use Image;

class UsersController extends Controller
{
    //用户详情
    public function show($id)
    {
        $user = User::findOrFail($id);

        return view('users.show', compact('user'));
    }

    //用户信息更新
    public function update($id, Request $request)
    {


        //封面图片压缩存储并生成路径
        $icon_path = "/img/icon/" . time() . ".jpg";
        Image::make($request->icon)->resize(200, 200)->save(public_path($icon_path));

        $user = User::findOrFail($id);
        $this->authorize('isMe', $user_id);
        $user->update([
            'icon' => $icon_path,
        ]);

        session()->flash('success', '编辑成功');
        return back();
    }
}
