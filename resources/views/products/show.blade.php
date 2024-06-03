@extends('layouts.app')

@section('title', 'Карточка товара')

@section('content')
    <div class="card">
        <div class="card-header">
            {{ $product->name }}
        </div>
        <div class="card-body">
            <p>Автор: {{$product->description}}</p>
            <p>Цена: {{$product->price}}</p>
            <p>Категория: {{$product->category->name}}</p>
            <p><img src="{{$product->image}}"/></p>
            <a href="{{route('products.index')}}">
            <button class="btn btn-primary">Назад</button>
            </a>
        </div>
    </div>
@endsection
