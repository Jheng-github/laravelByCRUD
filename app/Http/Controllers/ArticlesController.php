<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticlesController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth')->except('index'); //除了index其他都需要驗證
    // }


        public function index(){
            //$articles = Article::paginate(3)->orderBy('id', 'desc')->get();
            $articles = Article::orderBy('id', 'desc')->paginate(3);
           //$articles = Article::paginate(3);
            return view('articles.index', ['articles' => $articles]);
        }

    public function create(){
        return view('articles.create');
    }
    
    public function store(Request $request){
        $content = $request->validate(
            [
                'title' => 'required',
                'content' => 'required|min:3'
          
            ]);
   //         dd(auth()->user()->articles()->create($content));
    auth()->user()->articles()->create($content);
    //return redirect('/'); //
   
      return redirect()->route('root')->with('notice', '文章新增成功～'); //結果一樣
    }

    public function edit($id){
        $article = auth()->user()->articles->find($id);
        return view('articles.edit', ['article' => $article]);
    }

    public function update(Request $request, $id){
        //收到表單傳遞的值這個是Request  , 第幾筆是$id
        $article = auth()->user()->articles->find($id);
        //驗證表單
        $content = $request->validate(
            [
                'title' => 'required',
                'content' => 'required|min:3'
          
            ]);
            $article->update($content);
          return redirect()->route('root')->with('notice', '文章更新成功～');
    }
}
