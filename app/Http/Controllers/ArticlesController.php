<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticlesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index'); //除了index其他都需要驗證
    }


        public function index(){
            $articles = Article::all();
 
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
}
