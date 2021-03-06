@extends('layouts.master')

@section('title')
    Remove product
@endsection

@section('content')
    <ol class="breadcrumb">
        <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
        <li class="active">Remove Products </li>
    </ol>
    @if(Session::has('success'))
        <div class="row">
            <div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">
                <div id="charge-message" class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
            </div>
        </div>
    @endif
    @foreach($products->chunk(3) as $productChunk)
        <div class="row">
            @foreach($productChunk as $product)
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src={{ $product->imagePath }} class="img-responsive" alt="...">
                        <div class="caption">
                            <h3>{{ $product->title }}</h3>
                            <p class="discription">{{ $product->description }}</p>
                            <div class="clearfix">
                                <div class="pull-left price">$ {{ $product->price }}</div>
                                <a href="{{ route('admin.removeselectedproduct',['id' => $product->id]) }}" class="btn btn-danger pull-right" role="button">Remove from shop</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endforeach
@endsection