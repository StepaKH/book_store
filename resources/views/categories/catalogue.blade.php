@extends('layouts.app')

@section('title', 'Список категорий')

@section('content')
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Категория</th>
            <th scope="col">Описание</th>
            <th scope="col">Родительская категория</th>
        </tr>
        </thead>
        <tbody>
        @foreach($categories as $category)
            <tr>
                <td>{{ $category->id }}</td>
                <td>{{ $category->name }}</td>
                <td>{{ $category->description }}</td>
                <td>{{ $category->getParentName() }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection