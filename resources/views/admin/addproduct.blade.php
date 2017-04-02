@extends('layouts.master')

@section('title')
    Add Product
@endsection

@section('content')
    <ol class="breadcrumb">
        <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
        <li class="active">Add product</li>
    </ol>
    <div class="row">
        <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
            <h1>Add Product</h1>
            <div id="charge-error" class="alert alert-danger" {{ !Session::has('error') ? 'hidden' : '' }}>
                {{ Session::get('error') }}
            </div>
            <form action="{{ route('admin.addproduct') }}" method="post" id="checkout-form">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="form-group">
                            <label for="name">Title</label>
                            <input type="text" id="title" class="form-control" required name="title">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="form-group">
                            <label for="name">Price</label>
                            <input type="text" id="price" class="form-control" required name="price" >
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="form-group">
                            <label for="name">imagePath</label>
                            <input type="text" id="imagePath" class="form-control" required name="imagepath">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="form-group">
                            <label for="name">Discription</label>
                            <input type="text" id="description" class="form-control" required name="discription">
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
                <button type="submit" class="btn btn-success">Add Product</button>
            </form>
        </div>
    </div>
@endsection