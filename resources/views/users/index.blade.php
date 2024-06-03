@extends('layouts.app')

@section('title', 'Пользователь')

@section('content')
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">ФИО</th>
            <th scope="col">Email</th>
            <th scope="col">Роль</th>
            <th scope="col">Действия</th>
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->role == 1 ? "Администратор" : "Покупатель" }}</td>
                <td>
                    <a href="{{route('users.show', $user)}}">
                        <button class="btn btn-primary btn-sm mt-1">Просмотр</button>
                    </a>
                    <a href="{{route('users.edit', $user)}}">
                        <button class="btn btn-info btn-sm mt-1">Изменить</button>
                    </a>
                    <form method="POST" action="{{route('users.destroy', $user)}}">
                        @csrf
                        @method("DELETE")
                        <button type="submit" class="btn btn-danger btn-sm mt-1">Удалить</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
