<div class="{{ $classes }} max-w-md mx-auto"> {{-- mx-auto центрирует этот div --}}
    {{-- Удалил text-left с label, чтобы он наследовал text-center от формы --}}
    <label for="{{ $name }}" class="block text-gray-700 text-sm font-bold mb-2">
        {{ $label }}
    </label>

    <select class="
        mt-1 block w-full
        py-2 px-3
        border border-gray-300
        bg-white rounded-md shadow-sm
        focus:outline-none focus:ring-blue-500 focus:border-blue-500
        sm:text-sm
    " aria-label="Default select example" name="{{ $name }}" id="{{ $name }}">
        <option selected disabled>Выберете категорию</option>
        @forelse($categories as $category)
            <option value="{{ $category->id }}">{{$category->title }}</option>
        @empty
            <option disabled>Нет доступных категорий</option>
        @endforelse
    </select>
</div>
