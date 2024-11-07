@props(['writer'])

<a href="{{ route('getWriterArticle', ['writer' => $writer->writer_name]) }}">
    <div class="col">
        <div class="card h-100 no-outline border-0">
            <img src="{{ asset($writer->avatar) }}" class="card-img-top rounded-circle" style="height: 200px; width: 200px; object-fit: cover;" alt="Card Image 2">
            <div class="card-body">
                <h5 class="card-title">{{ $writer->writer_name }}</h5>
                <p class="card-text">{{ $writer->short_description }}</p>
            </div>
        </div>
    </div>
</a>