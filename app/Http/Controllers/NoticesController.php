<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Notice;

class NoticesController extends Controller
{
    //通知列表页
    public function index()
    {
        //获取全部通知
        $notices = Notice::orderBy('created_at','desc')->paginate(20);

        return view('notices.index', compact('notices'));
    }
}
