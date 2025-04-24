@extends('admin.layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        <h3>Редактирование пользователя #{{ $user->id }}</h3>
    </div>
    <div class="card-body">
        <form action="{{ route('admin.users.update', $user) }}" method="POST">
            @csrf
            @method('PUT')
            
            <div class="mb-3">
                <label for="name" class="form-label">Имя</label>
                <input type="text" class="form-control" id="name" name="name" 
                       value="{{ old('name', $user->name) }}" required>
            </div>
            
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email"
                       value="{{ old('email', $user->email) }}" required>
            </div>
            
            <div class="mb-3">
                <label for="password" class="form-label">Новый пароль (оставьте пустым, чтобы не менять)</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            
            <button type="submit" class="btn btn-primary">Обновить</button>
            <a href="{{ route('admin.users.index') }}" class="btn btn-secondary">Отмена</a>
        </form>
    </div>
</div>
@endsection