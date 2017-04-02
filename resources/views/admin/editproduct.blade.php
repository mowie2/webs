@extends('layouts.master')

@section('title')
    Edit Product
@endsection

@section('content')
    <ol class="breadcrumb">
        <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
        <li><a href="{{ route('admin.editproductsview') }}">Edit product list</a></li>
        <li class="active">Edit product</li>
    </ol>
    <div class="row">
        <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
            <h1>Edit Product</h1>
            <div id="charge-error" class="alert alert-danger" {{ !Session::has('error') ? 'hidden' : '' }}>
                {{ Session::get('error') }}
            </div>
            <form action="{{ route('admin.posteditproduct') }}" method="post" id="checkout-form">
                <input type="hidden" value="{{ $product->id }}" name="id">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="form-group">
                            <label for="name">Title</label>
                            <input type="text" value="{{ $product->title }}" id="title" class="form-control" required name="title">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="form-group">
                            <label for="name">Price</label>
                            <input type="text" value="{{ $product->price }}" id="price" class="form-control" required name="price" >
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="form-group">
                            <label for="name">imagePath</label>
                            <input type="text" value="{{ $product->imagePath }}" id="imagePath" class="form-control" required name="imagePath">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="form-group">
                            <label for="name">Discription</label>
                            <input type="text" value="{{ $product->description }}" id="description" class="form-control" required name="discription">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="form-group">
                            <label for="name">Category</label>
                            <select class="form-control background" required name="category">
                                @foreach($categorie as $c)
                                    <option  value="{{$c->genre}}" >{{$c->genre}}  </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="form-group">
                            <label for="name">Group</label>
                            <select class="form-control background" required name="subcategory">
                                @foreach($subcategorie as $sc)
                                    <option  value="{{$sc->group}}" >{{$sc->group}}  </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>

                {{ csrf_field() }}
                <button type="submit" class="btn btn-success">Save changes</button>
            </form>
        </div>
    </div>
@endsection