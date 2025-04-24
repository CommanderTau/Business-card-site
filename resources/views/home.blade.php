@extends('layouts.app')

@section('title', 'Главная')
@section('content')
<div class="row">
    <div class="test1">
        <h1>Добро пожаловать!</h1>
        <p>Bottom text</p>
    </div>
    <div class="cool-image">
        <img src="https://ih1.redbubble.net/image.5453026290.4912/bg,f8f8f8-flat,750x,075,f-pad,750x1000,f8f8f8.jpg" alt="Крутая картинка" class="img-cool">
    </div>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-lg-8">
            <div class="ratio ratio-16x9">
                <iframe 
                src="https://www.youtube.com/embed/gDjMZvYWUdo?si=-lvduatcFErzNp1x" 
                title="YouTube video player" 
                frameborder="0" 
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                allowfullscreen
                ></iframe>
            </div>
            </div>
        </div>
        </div>
</div>
@endsection