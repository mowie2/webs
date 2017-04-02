@extends('layouts.master')

@section('title')
    Add Category
@endsection

@section('content')
    <ol class="breadcrumb">
        <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
        <li class="active">Add Category</li>
    </ol>

    <div class="row">
        <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
            <h1>Add Category</h1>
            <div id="charge-error" class="alert alert-danger" {{ !Session::has('error') ? 'hidden' : '' }}>
                {{ Session::get('error') }}
            </div>
            <form action="{{ route('admin.addcategory') }}" method="post" id="checkout-form">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="form-group">
                            <label for="name">Genre</label>
                            <input type="text" id="genre" class="form-control" required name="genre">
                        </div>
                    </div>
                </div>
                {{ csrf_field() }}
                <button type="submit" class="btn btn-success">Add Category</button>
            </form>
        </div>
    </div>
@endsection