@extends('layouts.main')

@section('title', "Новость $id")

@section('content')
    <div class="container">
        <h1>Новости</h1>

        <div class="news-item">
            <h2>Заголовок новости {{ $id }}</h2>
        </div>
    </div>
@endsection

