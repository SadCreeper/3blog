<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Notice;

use Auth;

class NoticesController extends Controller
{
    //通知列表页
    public function index()
    {
        //获取全部通知
        $notices = Notice::where('user_id', Auth::id())->orderBy('created_at','desc')->paginate(20);

        return view('notices.index', compact('notices'));
    }
}
