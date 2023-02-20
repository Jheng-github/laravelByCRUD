@extends('layouts.articles')

@section('main')
    <h1 class="font-thin text-2xl">文章列表</h1>
 

  <!--  <a href="/articles/create">新增文章</a> 因為用自動創出7條路徑所以路徑必須為creeate -->
  <a href="{{ route('articles.create') }}">新增文章</a>

@foreach ($articles as $article)
      <div class = "border-t border-gray-300 my-1 p-2">
     <h2 class = "font-bold text-xl"> 
      <a href="{{ route('articles.show', $article)}}">
      {{ $article->title }}</h2>
    </a>
        <p>
          {{ $article->created_at }} 由{{$article->user->email}}
        </p>
        <a href="{{ route('articles.edit', $article) }}">編輯</a>
      </div>
      @endforeach

      {{ $articles->links() }}
@endsection