@extends('layouts.app')

@section('title', 'Фотогалерея')
@section('content')
<h1>Фотогалерея нашего кафе</h1>
<div class="row">
    @foreach($images as $image)
    <div class="col-md-4 mb-4">
        <div class="card">
            <img src="{{ asset('storage/' . $image->image_path) }}" class="card-img-top" alt="{{ $image->title }}">
            <div class="card-body">
                <h5 class="card-title">{{ $image->title }}</h5>
                <p class="card-text">{{ $image->description }}</p>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection