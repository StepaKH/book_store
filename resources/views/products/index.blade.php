@extends('layouts.app')

@section('title', 'Список товаров')

@section('content')
    <form method="GET" action="{{ route('search') }}">
        <input type="text" name="search"/>
        <button class="btn btn-sm btn-primary" type="submit">Поиск</button>
        <a href="{{route('products.index')}}">
            <button class="btn btn-sm btn-primary">Сбросить поиск</button>
        </a>
    </form>
    <a href="{{route('products.create')}}">
        <button class="btn btn-success">Создать товар</button>
    </a>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Название</th>
            <th scope="col">Автор</th>
            <th scope="col">Цена</th>
            <th scope="col">Действия</th>
        </tr>
        </thead>
        <tbody>
        @foreach($products as $product)
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->description }}</td>
                <td>{{ $product->price }}</td>
                <td>
                    <a href="{{route('products.show', $product)}}">
                        <button class="btn btn-primary btn-sm mt-1">Просмотреть</button>
                    </a>
                    @auth
                        <a href="{{route('products.edit', $product)}}">
                            <button class="btn btn-info btn-sm mt-1">Изменить</button>
                        </a>
                       <form method="POST" action="{{route('products.destroy', $product)}}">
                            @csrf
                            @method("DELETE")
                            <button type="submit" class="btn btn-danger btn-sm mt-1">Удалить</button>
                        </form>
                    @endauth
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
