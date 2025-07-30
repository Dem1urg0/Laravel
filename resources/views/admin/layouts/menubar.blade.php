<nav class="bg-gray-100 py-3 shadow-md">
    <div class="container mx-auto px-4 flex flex-wrap items-center">

        {{-- Бренд и Кнопка-гамбургер --}}
        <div class="flex items-center justify-between w-full lg:w-auto">
            <a class="text-xl font-bold text-gray-800 hover:text-blue-600 transition-colors duration-200"
               href="#">Меню</a>

            <button
                class="lg:hidden p-2 rounded-md text-gray-700 hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-gray-300"
                type="button" id="navbar-toggler">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                     xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
        </div>

        {{-- Collapsible Menu Content --}}
        <div class="hidden w-full lg:flex lg:w-auto" id="navbar-menu">
            {{-- ИЗМЕНЕНО: lg:space-x-4 на lg:space-x-2 --}}
            <ul class="flex flex-col w-full lg:flex-row mt-4 lg:mt-0 lg:space-x-2 ml-2">
                {{-- У LI убраны lg:ml-4, так как space-x на UL уже делает отступы --}}
                <li class="mb-2 lg:mb-0 w-full">
                    <a @class([
                        'block w-full py-2 px-3 rounded-md transition-colors duration-200 text-left',
                        'text-gray-700 hover:bg-gray-200 hover:text-blue-600',
                        'bg-blue-100 text-blue-700 font-semibold' => request()->routeIs('home')
                    ])
                       aria-current="{{ request()->routeIs('home') ? 'page' : '' }}"
                       href="{{ route('home') }}">Главная</a>
                </li>
                <li class="mb-2 lg:mb-0 w-full">
                    <a @class([
                        'block w-full py-2 px-3 rounded-md transition-colors duration-200 text-left',
                        'text-gray-700 hover:bg-gray-200 hover:text-blue-600 whitespace-nowrap',
                        'bg-blue-100 text-blue-700 font-semibold' => request()->routeIs('news.index')
                    ])
                       aria-current="{{ request()->routeIs('news.index') ? 'page' : '' }}"
                       href="{{ route('news.index') }}">Новости</a>
                </li>
                <li class="mb-2 lg:mb-0 w-full">
                    <a @class([
                        'block w-full py-2 px-3 rounded-md transition-colors duration-200 text-left',
                        'text-gray-700 hover:bg-gray-200 hover:text-blue-600 whitespace-nowrap',
                        'bg-blue-100 text-blue-700 font-semibold' => request()->routeIs('news.category.index')
                    ])
                       aria-current="{{ request()->routeIs('news.category.index') ? 'page' : '' }}"
                       href="{{ route('news.category.index') }}">Категории</a>
                </li>
                <li class="mb-2 lg:mb-0 w-full">
                    <a @class([
                        'block w-full py-2 px-3 rounded-md transition-colors duration-200 text-left',
                        'text-gray-700 hover:bg-gray-200 hover:text-blue-600 whitespace-nowrap',
                        'bg-blue-100 text-blue-700 font-semibold' => request()->routeIs('news.download')
                    ])
                       aria-current="{{ request()->routeIs('news.download') ? 'page' : '' }}"
                       href="{{ route('news.download') }}">Скачать новость</a>
                </li>
                <li class="mb-2 lg:mb-0 w-full">
                    <a @class([
                        'block w-full py-2 px-3 rounded-md transition-colors duration-200 text-left',
                        'text-gray-700 hover:bg-gray-200 hover:text-blue-600 whitespace-nowrap',
                        'bg-blue-100 text-blue-700 font-semibold' => request()->routeIs('news.create')
                    ])
                       aria-current="{{ request()->routeIs('news.create') ? 'page' : '' }}"
                       href="{{ route('news.create') }}">Создать новость</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
@section('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const navbarToggler = document.getElementById('navbar-toggler');
            const navbarMenu = document.getElementById('navbar-menu');

            if (navbarToggler && navbarMenu) {
                navbarToggler.addEventListener('click', function () {
                    navbarMenu.classList.toggle('hidden');

                });
            }
        });
    </script>
@endsection
