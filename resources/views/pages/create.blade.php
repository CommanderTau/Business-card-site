@extends('admin.layouts.app')

@section('content')
<div class="container">
    <h1>Создать страницу</h1>
    
    <form method="POST" action="{{ route('admin.pages.store') }}">
        @csrf
        
        <div class="mb-3">
            <label>Заголовок</label>
            <input type="text" name="title" class="form-control" required>
        </div>
        
        <div class="mb-3">
            <label>URL-адрес (slug)</label>
            <input type="text" name="slug" class="form-control" required>
        </div>
        
        <div class="mb-3">
            <label>Контент</label>
            <textarea name="content" class="form-control" rows="10" required></textarea>
        </div>
        
        <button type="submit" class="btn btn-primary">Создать</button>
    </form>
</div>
@endsection