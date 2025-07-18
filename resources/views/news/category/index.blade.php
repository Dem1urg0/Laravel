@extends('layout.main')

@section('title')
    @parent | Категории
@endsection

@section('content')
    <div class="container">
        <h1>Категории</h1>
        @forelse($categories as $category)
            <div class="d-grid gap-2 d-md-block">
                <a class="btn btn-secondary mt-3" href="{{ route('news.category.show', $category['slug']) }}">{{ $category['title'] }}</a>
            </div>
        @empty
            <p>Нет категорий для отображения.</p>
        @endforelse
    </div>
@endsection


