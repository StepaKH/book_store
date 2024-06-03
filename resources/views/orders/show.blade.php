@extends('layouts.app')

@section('title', 'Карточка заказа')

@section('content')
    <div class="card">
        <div class="card-header">
            Заказ #{{ $order->id }}
        </div>
        <div class="card-body">
            <p>Дата создания: {{$order->date}}</p>
            <p>Название товара: {{$order->product->name}}</p>
            <p>Количество: {{$order->count}}</p>
            <p>Имя заказчика: {{$order->user->name}}</p>
            <a href="{{route('orders.index')}}">
                <button class="btn btn-primary">Назад</button>
            </a>
        </div>
    </div>
@endsection
