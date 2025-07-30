<div class="{{ $classes }} max-w-md"> {{-- ДОБАВИЛ max-w-md для ограничения ширины --}}
    {{-- Заменили mb-3 на mb-2 и добавили Tailwind классы для label --}}
    <label for="{{ $name }}" class="block text-gray-700 text-sm font-bold mb-2">
        {{ $label }}
    </label>

    {{-- Заменили form-select на Tailwind классы для select --}}
    <select class="
        mt-1 block w-full {{-- w-full теперь будет занимать 100% от max-w-md родителя --}}
        py-2 px-3
        border border-gray-300
        bg-white rounded-md shadow-sm
        focus:outline-none focus:ring-blue-500 focus:border-blue-500
        sm:text-sm
    " aria-label="Default select example" name="{{ $name }}" id="{{ $name }}">
        <option selected disabled>Выберете новость</option>
        @forelse($news as $new) {{-- $news вместо $categories --}}
        <option value="{{ $new->id }}">{{ $new->title }}</option> {{-- $new['title'] вместо $category['title'] --}}
        @empty
            <option disabled>Нет доступных новостей</option>
        @endforelse
    </select>
</div>
