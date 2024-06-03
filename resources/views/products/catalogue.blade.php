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
                <td>{{ $product->price  }}</td>
                <td>
                    <a href="{{route('products.show', $product)}}">
                        <button class="btn btn-primary btn-sm">Просмотреть</button>
                    </a>
                    @auth
                        <a href="{{route('makeOrder', $product->id)}}">
                            <button class="btn btn-success btn-sm">Заказать</button>
                        </a>
                    @endauth
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
