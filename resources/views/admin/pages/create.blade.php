@extends('admin.layouts.app')

@section('title', 'Создание страницы')

@section('content')
<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h2>Создать новую страницу</h2>
        </div>
        
        <div class="card-body">
            <form action="{{ route('admin.pages.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label>Заголовок</label>
                    <input type="text" name="title" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label>URL-адрес</label>
                    <input type="text" name="slug" class="form-control" required>
                </div>
                <div class="mb-3">
                    <label>Содержание</label>
                    <textarea name="content" class="form-control" rows="5" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Создать</button>
            </form>
        </div>
    </div>
</div>
@endsection