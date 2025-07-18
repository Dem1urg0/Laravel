@extends('layout.main')

@section('title')
    @parent | Новости
@endsection

@section('menu')
    @include('layout.menubar')
@endsection

@section('content')
    <h1 class="mb-4">Новости</h1>
    <hr class="my-4">
    @include('news.layout.newsList')
@endsection
