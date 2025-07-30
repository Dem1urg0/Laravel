@extends('layouts.main')

@section('title', 'Админка')

@section('menu')
    @include('admin.layouts.menubar')
@endsection

@section('content')
    <div class="container">
        <h1>Добро пожаловать ADMIN!</h1>
    </div>
@endsection
