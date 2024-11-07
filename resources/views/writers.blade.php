@extends('layout.layout')

@section('content')
<div class="container mt-5 min-vh-100">
    <h1>Our Writes</h1>
    <div class="container mt-5">
        <div class="row row-cols-1 row-cols-md-3 g-4 d-flex justify-content-around">
            @foreach ($writers as $writer)
            @include('component.profile_card', [
                'writer' => $writer
                ])
        @endforeach
    </div>
</div>
</div>
@endsection