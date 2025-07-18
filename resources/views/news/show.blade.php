@extends('layout.main')

@section('title')
    @parent | Новость {{ $id }}
@endsection

@section('content')
    <div class="container">
        <h1>Новости</h1>

        <div class="news-item">
            <h2>Заголовок новости {{ $id }}</h2>
        </div>
    </div>
@endsection

