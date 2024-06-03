@extends('layouts.app')

@section('title', 'Заказ товара')

@section('content')
    <div class="card">
        <div class="card-header">
            Создание нового товара
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

            <form method="POST" action="{{ route('storeOrder',  $product) }}">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Продукт: {{$product->name}}</label>
                </div>

                <div class="mb-3">
                    <label for="count" class="form-label">Количество</label>
                    <input type="number" class="form-control" name="count" id="count">
                </div>

                <button type="submit" class="btn btn-success">Заказать</button>
                <a href="{{route('products.index')}}">
                    <button type="button" class="btn btn-primary">Отмена</button>
                </a>
            </form>
        </div>
    </div>
@endsection
