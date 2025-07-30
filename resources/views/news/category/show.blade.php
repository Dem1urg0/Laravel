@extends('layouts.main')

@section('title', 'Новости - Категория ' . $name)

@section('content')
    <div class="container">
        <h1>Новости</h1>
        <hr class="my-4">
        <div class="news-item">
            <h2>Категория {{ $name }}</h2>
        </div>
        <hr class="my-4">
        @include('news.layout.newsList')
    </div>
@endsection
