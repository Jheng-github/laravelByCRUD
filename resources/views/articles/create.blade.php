@extends('layouts.articles')

@section('main')
    <h1 class="font-thin text-4x1">文章 > 新增文章</h1>
    @if ($errors->all())
    <div class="errors p-3 bg-red-500 text-red-100 font-100 rouneded">
    <ul>
        @foreach ($errors->all() as $error)
            <li>
                {{$error}}
            </li>
        @endforeach
    </ul>    
    </div>       
    @endif


    <form action="{{ route('articles.store')}}" method="POST">
        @csrf
        <div class="field">
        <label for = ""> 標題</label>
        <input type = "text"  value="{{ old('title')}}" name="title" class="border border-gray-300 p-2 m-4">
    </div>
    <div class="field">
        <label for = ""> 內文</label>
        <textarea name="content"  value="{{ old('content')}}"  cols="30" rows="10" class="border border-gray-300 p-2 m-4" ></textarea>
    </div>
    <div class="action">

        <button tyoe ="sumbit" class="px-3 py-1 rounded bg-gray-200 hover:bg-gray-400">新增文章</button>

    </div>
    </form>
@endsection