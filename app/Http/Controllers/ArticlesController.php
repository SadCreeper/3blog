<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Article;

class ArticlesController extends Controller
{
    //文章列表页
    public function index()
    {
        //获取全部文章
        $articles = Article::orderBy('created_at','desc')->paginate(20);

        return view('articles.index', compact('articles'));
    }

    //新建文章页
    public function create()
    {
        return view('articles.create');
    }

    //文章保存
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:50',
            'category' => 'required',
        ]);

        $article = Article::create([
            'user_id'=> $request->user_id,
            'title' => $request->title,
            'category' => $request->category,
            'content' => $request->content,
        ]);

        session()->flash('success', '添加成功');
        return redirect()->route('articles.index');
    }

    //编辑文章页
    public function edit($id)
    {
        $article = Article::findOrFail($id);
        return view('articles.edit', compact('article'));
    }

    //文章更新
    public function update($id, Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:50',
            'category' => 'required',
        ]);

        $article = Article::findOrFail($id);
        $article->update([
            'user_id'=> $request->user_id,
            'title' => $request->title,
            'category' => $request->category,
            'content' => $request->content,
        ]);

        session()->flash('success', '编辑成功');
        return back();
    }

    //文章删除
    public function destroy($id)
    {
        $article = Article::findOrFail($id);
        $article->delete();
        session()->flash('success', '删除成功');
        return back();
    }

    //文章详情
    public function show($id)
    {
        $article = Article::findOrFail($id);

        return view('articles.detail', compact('article'));
    }
}
