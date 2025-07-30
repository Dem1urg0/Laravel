@extends('layouts.main')

@section('title', 'Главная страница')

@section('menu')
    @include('layouts.menubar')
@endsection

@section('content')
    <div class="container">
        <h1>Добро пожаловать на наш сайт!</h1>
        <p>Это главная страница нашего проекта. Мы рады видеть вас здесь.</p>
        <p>Используйте меню выше, чтобы узнать больше о проекте или почитать последние новости.</p>
    </div>
@endsection
