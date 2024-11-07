@extends('layout.layout')
@section('title', 'Writer Article')

@section('content')
<div class="container">
    <div class="mb-3 border-0">
        <div class="d-flex gap-5 align-items-center text-center">
            <div>
                <img src="{{ asset($writer->avatar) }}" class="img-fluid shadow ratio ratio-1x1 rounded-circle" alt="..." style="width: 6rem; height: 6rem">
            </div>
            <div>
                <h5 class="fw-semibold">{{ $writer->writer_name }}</h5>
                <p>{{ $writer->short_description }}</p>
            </div>
        </div>
    </div>

    @foreach ($writer->article as $article)
        @include('component.card', ['articles'=>$article])
    @endforeach
</div>
@endsection