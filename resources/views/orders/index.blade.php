@extends('layouts.app')

@section('title', 'Список заказов')

@section('content')
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Дата создания</th>
            <th scope="col">Название продукта</th>
            <th scope="col">Количество</th>
            <th scope="col">Имя заказчика</th>
        </tr>
        </thead>
        <tbody>
        @foreach($orders as $order)
            <tr>
                <td>{{ $order->id }}</td>
                <td>{{ $order->date }}</td>
                <td>{{ $order->product->name }}</td>
                <td>{{ $order->count }}</td>
                <td>{{ $order->user->name  }}</td>

                <td>
                    <a href="{{route('orders.show', $order)}}">
                        <button class="btn btn-primary btn-sm">Просмотреть</button>
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
