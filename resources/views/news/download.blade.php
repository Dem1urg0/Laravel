@extends('layouts.main')

@section('title', 'Сохранить новость')

@section('menu')
    @include('layouts.menubar')
@endsection

@section('content')
    {{-- Заменили .form-container на Tailwind классы для центрирования и max-width --}}
    <div class="mx-auto max-w-lg p-6 bg-white rounded-lg shadow-md">
        <h1 class="text-2xl font-bold text-center mb-6">Скачать новость</h1> {{-- mb-4 -> mb-6, text-2xl font-bold --}}

        <div class="mb-4"> {{-- mb-3 -> mb-4 --}}
            {{-- Передайте Tailwind классы в ваш компонент, если он их обрабатывает --}}
            <x-form.news-select classes="w-full" label="Новости"/>
        </div>

        <div class="mb-6"> {{-- mb-3 -> mb-6 --}}
            <label for="category-select" class="block text-gray-700 text-sm font-bold mb-2"> {{-- mb-2 -> mb-2, block, text-gray-700, text-sm, font-bold --}}
                Или скачайте группу новостей по параметрам:
            </label>
            {{-- Предполагаем, что внутри news-category-select тоже есть label или select, которому нужен ID --}}
            <x-form.news-category-select classes="w-full" label="Категории" id="category-select"/> {{-- добавил id --}}
        </div>

        {{-- Заменили btn btn-primary btn-lg на Tailwind классы для кнопки --}}
        <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-4 rounded focus:outline-none focus:shadow-outline transition duration-150 ease-in-out" onclick="sendRequest()">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                 class="inline-block align-middle me-2 mr-2" viewBox="0 0 16 16"> {{-- bi bi-download me-2 -> inline-block align-middle mr-2 --}}
                <path
                    d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z"/>
                <path
                    d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z"/>
            </svg>
            Скачать
        </button>
    </div>
@endsection
@section('scripts')
    @parent
    <script>
        function sendRequest() {
            const newsSelect = document.getElementById('news_id').value;
            const categorySelect = document.getElementById('category_id').value;

            if (newsSelect === 'Выберете новость' && categorySelect === 'Выберете категорию') {
                console.warn('Выберете новость или категорию для скачивания');
                return;
            }

            let method;
            let requestData = {};
            let url = '/news/download/';

            if (newsSelect && newsSelect !== 'Выберете новость') {
                method = 'GET';
                url = url + newsSelect;
            } else if (categorySelect && categorySelect !== 'Выберете категорию') {
                method = 'POST';
                requestData = {
                    'category_id': categorySelect
                }
            }

            fetch(url, { // Исправлено: используем готовый URL
                method: method,
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}',
                    'Accept': 'application/json'
                },
                body: method === 'POST' ? JSON.stringify(requestData) : null
            })
                .then(response => {
                    if (!response.ok) {
                        throw new Error('Ошибка сети: ' + response.status);
                    }
                    return response.blob();
                })
                .then(blob => {
                    // Добавьте код для скачивания файла
                    const a = document.createElement('a');
                    a.href = URL.createObjectURL(blob);
                    a.download = 'news.json';
                    a.click();
                });
        }
    </script>
@endsection
