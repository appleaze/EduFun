@extends('layout.layout')

@section('title', 'HomePage')
@section('content')
<img src="{{ asset('img/wallpaper_banner.jpg') }}" style="max-height:20%; object-fit: cover;" class="img-fluid" alt="img-banner">
<div class="container pt-5">
    @foreach ($articles as $article)
        @include('component.card', ['articles'=>$articles])
    @endforeach
</div>
@endsection