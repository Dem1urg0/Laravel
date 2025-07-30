@extends('layouts.main')

@section('title', 'Добавить новость')

@section('menu')
    @include('layouts.menubar')
@endsection

@section('content')
    {{-- Добавил text-center к форме, чтобы все метки и строчные элементы в ней центрировались --}}
    <form class="max-w-2xl mx-auto p-6 bg-white rounded-lg shadow-md text-center" enctype="multipart/form-data" action="{{ route('news.create') }}"
          method="POST">
        @csrf
        {{-- Заголовок уже центрирован явно --}}
        <h1 class="text-2xl font-bold text-gray-800 mb-6 text-center">Добавить новость</h1>

        <x-form.text-input classes="mb-4" name="title" placeholder="Текст заголовка" title="Заголовок" type="text"/>
        <x-form.news-category-select classes="mb-4"/>
        <x-form.check-box classes="mb-4" name="private" title="Приватная"/>
        <x-form.text-input classes="mb-6" name="content" title="Текст новости" type="textarea"/>
        <input type="file" name="image"
               class="mb-4 max-w-md mx-auto block text-sm text-gray-500
        file:mr-4 file:py-2 file:px-4 file:rounded-full
         file:border-0 file:text-sm file:font-semibold
          file:bg-blue-50 file:text-blue-700
           hover:file:bg-blue-100 focus:outline-none focus:ring-2
            focus:ring-blue-500 focus:ring-offset-2"/>
        <button type="submit"
                class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline transition duration-150 ease-in-out block mx-auto">
            Добавить
        </button>
    </form>
@endsection
