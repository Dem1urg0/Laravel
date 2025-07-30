@extends('layouts.main')

@section('title', 'Новости')

@section('menu')
    @include('layouts.menubar')
@endsection

@section('content')
    <h1 class="mb-4">Новости</h1>
    <hr class="my-4">
    @include('news.layout.newsList')
@endsection

