<div class="row g-4">
    @forelse($news as $new)
        <div class="col-12 col-md-6 col-lg-4 d-flex justify-content-center">
            <a class="text-decoration-none text-dark" href="{{ route('news.show', $new['id']) }}">
                <div class="card h-100" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">{{ $new['title'] }}</h5>
                        <h6 class="card-subtitle mb-2 text-body-secondary">{{ $new['created_at'] }}</h6>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card’s content.</p>
                    </div>
                </div>
            </a>
        </div>
    @empty
        <div class="col">
            <p>Нет новостей для отображения.</p>
        </div>
    @endforelse
</div>
