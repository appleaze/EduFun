@extends('layout.layout')

@section('content')
<div class='container'>
    <h2 class="fw-semibold">{{ $article->category->name }}</h2>
    <img src="{{ $article->banner_url }}" alt="image_link" class="img-fluid rounded-5 w-100">
    <p class="pt-2">{{ $article->created_at->diffForHumans()}} | <span>{{ $article->writer->writer_name }}</span></p>
    <p>{{ $article->body }}</p>
</div>
@endsection