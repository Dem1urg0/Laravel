<div class="{{ $classes }} max-w-md mx-auto"> {{-- mx-auto центрирует этот div --}}
    {{-- Удалил text-left с label, чтобы он наследовал text-center от формы --}}
    <label for="{{ $name }}" class="block text-gray-700 text-sm font-bold mb-2">
        {{ $title }}
    </label>
    @if($type === 'textarea')
        <textarea name="{{ $name }}"
                  id="{{ $name }}"
                  rows="3"
                  class="
                      mt-1 block w-full
                      py-2 px-3
                      border border-gray-300
                      bg-white rounded-md shadow-sm
                      focus:outline-none focus:ring-blue-500 focus:border-blue-500
                      sm:text-sm
                  "></textarea>
    @else
        <input type="{{ $type }}"
               name="{{ $name }}"
               id="{{ $name }}"
               placeholder="{{ $placeholder }}"
               class="
                   mt-1 block w-full
                   py-2 px-3
                   border border-gray-300
                   bg-white rounded-md shadow-sm
                   focus:outline-none focus:ring-blue-500 focus:border-blue-500
                   sm:text-sm
               ">
    @endif
</div>
