@extends('layouts.articles')

@section('main')
    <h1 class="font-thin text-2xl">文章列表</h1>


    <!--  <a href="/articles/create">新增文章</a> 因為用自動創出7條路徑所以路徑必須為creeate -->
    <a href="{{ route('articles.create') }}">新增文章</a>

    @foreach ($articles as $article)
    {{-- {{dd($article)}} --}}
        <div class="border-t border-gray-300 my-1 p-2">
            <h2 class="font-bold text-xl">
                <a href="{{ route('articles.show', $article->id) }}">
                    {{ $article->title }} 
            </h2>
            </a>
            <p>
                {{ $article->created_at }} 由{{ $article->user->email }}
            </p>

        </div>

        <form action="{{ route('articles.destroy', $article) }}" method="POST">
            @method('delete')
            @csrf
            <div class="flex">
                <a class='mr-2' href="{{ route('articles.edit', $article) }}">編輯</a>
                <button type="submit" class="px-2 bg-red-500 text-red-100">刪除</button>
            </div>
        </form>
    @endforeach

    {{ $articles->links() }}
@endsection
