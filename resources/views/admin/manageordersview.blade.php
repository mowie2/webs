@extends('layouts.master')

@section('title')
    Manage orders
@endsection
@section('content')
    <ol class="breadcrumb">
        <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
        <li class="active">Manage orders list</li>
    </ol>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>Order management</h1>
            <hr>
            <h2>Alle Orders</h2>
            @foreach($orders as $order)
                <div class="panel panel-default">
                    <div class="panel-body">
                        <h3>{{ $order->name }}</h3>
                        <ul class="list-group">
                            @foreach($order->cart->items as $item)
                                <li class="list-group-item">
                                    <span class="badge">${{ $item['price'] }}</span>
                                    {{$item['item']['title']}} | {{$item['qty']}} Units
                                </li>
                            @endforeach
                            <a href="{{ route('admin.removeorder',['id' => $order->id]) }}" class="btn btn-danger pull-right" role="button">Remove from orders</a>
                        </ul>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection