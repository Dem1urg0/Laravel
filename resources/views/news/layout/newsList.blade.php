<div
    class="grid grid-cols-1 gap-4 sm:grid-cols-2 lg:grid-cols-3">
    @forelse($news as $new)
        <div class="flex justify-center">
            <a class="block no-underline text-gray-900 hover:text-blue-600"
               href="{{ route('news.show', $new->id) }}">
                <div
                    class="bg-white rounded-lg shadow-md overflow-hidden h-full w-72 flex flex-col">
                    <div class="p-4 flex-grow">
                        <h5 class="text-lg font-semibold text-gray-800 mb-2">{{ $new->title }}</h5>
                        <h6 class="text-sm text-gray-600 mb-2">{{ $new->created_at }}</h6>
                        <p class="text-gray-700 text-sm leading-relaxed">{{ $new->content }}</p>
                    </div>
                    @if($new->image)
                        <img src="{{ Storage::url($new->image) }}" alt="news image">
                    @else
                        <img src="/storage/img/news/default.png" alt="news image">
                    @endif
                </div>
            </a>
        </div>
    @empty
        <div class="col-span-full text-center py-8">
            <p class="text-gray-600 text-lg">Нет новостей для отображения.</p>
        </div>
    @endforelse
</div>
