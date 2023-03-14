<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticlesController extends Controller
{

    public function index()
    {

        $articles = Article::with('user')->orderBy('id', 'desc')->paginate(3);

        return view('articles.index', ['articles' => $articles]);
    }

    public function show($id)//取的就是 $article->id
    { //撈出哪一筆資料 需要給參數
        $articles = Article::find($id); //實施撈出資料
        return view('articles.show', ['articles' => $articles]); //呈現view
    }


    public function create()
    {
        return view('articles.create');
    }

    public function store(Request $request)
    {
        $content = $request->validate(
            [
                'title' => 'required',
                'content' => 'required|min:3'

            ]
        );
        //         dd(auth()->user()->articles()->create($content));
        auth()->user()->articles()->create($content);
        //return redirect('/'); //

        return redirect()->route('root')->with('notice', '文章新增成功～'); //結果一樣
    }

    public function edit($id)
    {
        $article = auth()->user()->articles->find($id);
        return view('articles.edit', ['article' => $article]);
    }

    public function update(Request $request, $id)
    {
        //收到表單傳遞的值這個是Request  , 第幾筆是$id
        $article = auth()->user()->articles->find($id);
        //驗證表單
        $content = $request->validate(
            [
                'title' => 'required',
                'content' => 'required|min:3'

            ]
        );
        $article->update($content);
        return redirect()->route('root')->with('notice', '文章更新成功～');
    }

    public function destroy($id)
    {
        $article = auth()->user()->articles->find($id);
        $article->delete();
        return redirect()->route('root')->with('notice', '文章已刪除');
    }
}
