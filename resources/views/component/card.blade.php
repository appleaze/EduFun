@props(['articles'])

<div class="card mb-3">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="{{ $article->banner_url }}" class="img-fluid rounded-4" alt="...">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title">{{ $article->title }}</h5>
          <p class="card-text">{{ Str::limit($article->body, 200, '...') }}</p>
          <p class="card-text">
            <small class="text-body-secondary">{{ $article->created_at->diffForHumans()}}</small>
            <div class="d-flex justify-content-end">
                <a type="button" href="{{ route('getArticle', ['article' => $article->slug]) }}" class="btn btn-dark rounded-pill">Read more...</a>
            </div>
        </p>
        </div>
      </div>
    </div>
  </div>