@extends('layouts.app')
@section('admin_content')
<aside class="admin-sidebar">
    <ul class="nav flex-column">
        <li class="nav-item">
            <a class="nav-link active" href="{{ route('admin.dashboard') }}">
                <i class="bi bi-speedometer2"></i> Дашборд
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ request()->routeIs('admin.users.*') ? 'active' : '' }}" 
                href="{{ route('admin.users.index') }}">
                <i class="fas fa-users"></i> Пользователи
            </a>
        </li>
        <a href="{{ route('admin.pages.create') }}" class="btn btn-primary">
            <i class="fas fa-plus"></i> Создать страницу
        </a>
    </ul>
</aside>
@endsection