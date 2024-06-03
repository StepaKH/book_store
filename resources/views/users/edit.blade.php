@extends('layouts.app')

@section('title', 'Изменение пользователя')

@section('content')
    <div class="card">
        <div class="card-header">
            Пользователь
        </div>
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{route('users.update', $user)}}">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="name" class="form-label">ФИО</label>
                    <input type="text" class="form-control" name="name" id="name" value="{{$user->name}}">
                </div>

                <div class="mb-3">
                    <label for="name" class="form-label">E-mail</label>
                    <input type="text" class="form-control" name="email" id="email" value="{{$user->email}}">
                </div>

                <div class="mb-3">
                    <label for="price" class="form-label">Роль (1 - Администратор, иное - Покупатель)</label>
                    <input type="number" class="form-control" name="role" id="role" value="{{$user->role}}">
                </div>

                <button type="submit" class="btn btn-success">Сохранить</button>
                <a href="{{route('users.index')}}">
                    <button type="button" class="btn btn-primary">Отмена</button>
                </a>
            </form>
        </div>
    </div>
@endsection
