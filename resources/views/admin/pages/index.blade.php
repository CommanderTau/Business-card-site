@extends('admin.layouts.app')

@section('content')
<div class="container-fluid">
    <div class="d-flex justify-content-between mb-4">
        <h1>Страницы</h1>
        <a href="{{ route('admin.pages.create') }}" class="btn btn-primary align-self-center">
            Создать страницу
        </a>
    </div>

    <div class="card">
        <div class="card-body">
            <table class="table">
                <!-- Таблица со списком страниц -->
            </table>
        </div>
    </div>
</div>
@endsection