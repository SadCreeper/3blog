<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Comment;

class CommentsController extends Controller
{

    //评论列表页
    public function index()
    {
        //获取全部评论
        $comments = Comment::orderBy('created_at','desc')->paginate(20);

        return view('comments.index', compact('comments'));
    }

    //保存评论
    public function store(Request $request)
    {
        $this->validate($request, [
            'article_id' => 'required',
            'user_id' => 'required',
            'content' => 'required',
        ]);

        $comment = Comment::create([
            'article_id' => $request->article_id,
            'user_id' => $request->user_id,
            'content' => $request->content,
        ]);

        session()->flash('success', '评论成功');
        return back();
    }

    //编辑评论页
    public function edit($id)
    {
        $comment = Comment::findOrFail($id);
        return view('comments.edit', compact('comment'));
    }

    //评论更新
    public function update($id, Request $request)
    {
        $this->validate($request, [
            'article_id' => 'required',
            'user_id' => 'required',
            'content' => 'required',
        ]);

        $comment = Comment::findOrFail($id);
        $comment->update([
            'user_id'=> $request->user_id,
            'title' => $request->title,
            'category' => $request->category,
            'content' => $request->content,
        ]);

        session()->flash('success', '编辑成功');
        return back();
    }

    //评论删除
    public function destroy($id)
    {
        $comment = Comment::findOrFail($id);
        $comment->delete();
        session()->flash('success', '删除成功');
        return back();
    }
}
