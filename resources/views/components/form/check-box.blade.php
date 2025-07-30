<div class="{{ $classes }}">
    <input type="checkbox" class="sr-only peer" name="{{ $name }}" id="{{ $name }}" autocomplete="off">
    <label class="
        inline-block
        py-2 px-4
        rounded-md
        cursor-pointer
        transition-colors duration-200 ease-in-out

        border border-blue-500 text-blue-500
        hover:bg-blue-50
        focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-opacity-50

        peer-checked:bg-blue-600 peer-checked:text-white
        peer-checked:hover:bg-blue-700
        peer-checked:border-blue-600
    " for="{{ $name }}">
        {{ $title }}
    </label>
</div>
