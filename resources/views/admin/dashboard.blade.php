@extends('admin.layouts.app')

@section('content')
<div class="container">

    <div class="row">
        <div class="col-md-4 mb-4">
            <div class="card border-primary">
                <div class="card-body">
                    <h5 class="card-title">Пользователи</h5>
                    <p class="card-text display-4">{{ $usersCount ?? '0 (не передано)' }}</p>
                </div>
            </div>
        </div>
        
        <div class="col-md-4 mb-4">
            <div class="card border-success">
                <div class="card-body">
                    <h5 class="card-title">Страницы</h5>
                    <p class="card-text display-4">{{ $pagesCount ?? '0 (не передано)' }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection