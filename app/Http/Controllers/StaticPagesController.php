<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Article;

class StaticPagesController extends Controller
{
    public function home()
    {
        //获取全部文章
        $articles = Article::orderBy('created_at','desc')->paginate(20);

        return view('home', compact('articles'));
    }
}
