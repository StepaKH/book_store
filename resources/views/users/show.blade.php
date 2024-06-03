@extends('layouts.app')

@section('title', 'Профиль пользователя')

@section('content')
    <div class="card">
        <div class="card-header">
            {{ $user->name }}
        </div>
        <div class="card-body">
            <p>Email: {{$user->email}}</p>
            <p>Пароль (Hash): {{$user->password}}</p>
            <p>Роль: {{ $user->role == 1 ? "Администратор" : "Покупатель" }}</p>

            <a href="{{route('users.index')}}">
                <button class="btn btn-primary">Назад</button>
            </a>
        </div>
    </div>
@endsection
