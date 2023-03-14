@extends('layouts.articles')

@section('main')
    <h1 class="font-thin text-2xl">{{ $articles->title }} </h1>

    <p class="text-lg text-gray-600 p-2">
        {{ $articles->content }}
    
    </p>
    <a href="{{ route('articles.index') }}">回到首頁</a>
@endsection
