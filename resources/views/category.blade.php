@extends('layout.layout') 

@section('content')
<div class="container">
    <h2 class="fw-semibold pb-5">{{ $category->name }}</h2>
    @foreach ($category->article as $article)
        @include('component.card', ['article'=> $article])
    @endforeach
</div>
@endsection
