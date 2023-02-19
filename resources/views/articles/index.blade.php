@extends('layouts.articles')

@section('main')
    <h1 class="font-thin text-2xl">文章列表</h1>
 

  <!--  <a href="/articles/create">新增文章</a> 因為用自動創出7條路徑所以路徑必須為creeate -->
  <a href="{{ route('articles.create') }}">新增文章</a>


@endsection