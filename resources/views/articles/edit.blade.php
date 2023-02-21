@extends('layouts.articles')

@section('main')
    <h1 class="font-thin text-4x1">文章 > 編輯文章</h1>

    @if ($errors->all())
        <div class="errors p-3 bg-red-500 text-red-100 font-100 rouneded">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>
                        {{ $error }}

                    </li>
                @endforeach
            </ul>
        </div>
    @endif


    <form action="{{ route('articles.update', $article) }}" method="POST">
        @method('PATCH')
        @csrf
        <div class="field">
            <label for=""> 編輯標題</label>
            <input type="text" value="{{ $article->title }}" name="title" class="border border-gray-300 p-2 m-4">
        </div>
        <div class="field">
            <label for=""> 編輯內文</label>
            <textarea name="content" cols="30" rows="10" class="border border-gray-300 p-2 m-4">{{ $article->content }} </textarea>
        </div>
        <div class="action">

            <button tyoe="sumbit" class="px-3 py-1 rounded bg-gray-200 hover:bg-gray-400">確定修改</button>

        </div>
    </form>


@endsection
