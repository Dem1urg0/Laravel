@extends('layout.main')

@section('title')
    @parent | Главная
@endsection

@section('menu')
    @include('admin.layout.menubar')
@endsection

@section('content')
    <div class="container">
        <h1>Добро пожаловать ADMIN!</h1>
    </div>
@endsection
