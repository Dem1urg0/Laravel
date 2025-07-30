@extends('layouts.main')

@section('title', 'Категории новостей')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold mb-6 text-gray-800 text-center">Категории</h1> {{-- ДОБАВИЛ text-center --}}

        {{-- Контейнер для кнопок категорий --}}
        {{-- ДОБАВИЛ justify-center --}}
        <div class="flex flex-wrap justify-center gap-3">
            @forelse($categories as $category)
                <a class="inline-block bg-gray-200 hover:bg-gray-300 text-gray-800 font-semibold py-2 px-4 rounded-md transition duration-150 ease-in-out text-sm"
                   href="{{ route('news.category.show', $category->slug) }}">
                    {{ $category->title }}
                </a>
            @empty
                <div class="w-full text-center py-8">
                    <p class="text-gray-600 text-lg">Нет категорий для отображения.</p>
                </div>
            @endforelse
        </div>
    </div>
@endsection


