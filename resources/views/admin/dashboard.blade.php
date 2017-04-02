
@extends('layouts.master')
@section('title')
    Dashboard
@endsection
@section('content')
    <ol class="breadcrumb">
        <li class="active">Dashboard</li>
    </ol>
    <div class="btn-group btn-group-justified" role="group" aria-label="...">
        <a href="{{route('admin.addcategory')}}" class="btn btn-success" role="button">Add Category</a>
        <a href="{{route('admin.addsubcategory')}}" class="btn btn-success" role="button">Add SubCategory</a>
        <a href="{{route('admin.addproduct')}}" class="btn btn-success" role="button">Add Product</a>
    </div>
    <hr>
    <div class="btn-group btn-group-justified" role="group" aria-label="...">
        <a href="{{route('admin.removecategory')}}" class="btn btn-danger" role="button">Remove Category</a>
        <a href="{{route('admin.removesubcategory') }}" class="btn btn-danger" role="button">Remove SubCategory</a>
        <a href="{{route('admin.removeproduct')}}" class="btn btn-danger" role="button">Remove Product</a>
    </div>
    <hr>
    <div class="btn-group btn-group-justified" role="group" aria-label="...">
        <a href="#" class="btn btn-primary" role="button">Update Category</a>
        <a href="#" class="btn btn-primary" role="button">Update SubCategory</a>
        <a href="{{ route('admin.editproductsview') }}" class="btn btn-primary" role="button">Update Product</a>
    </div>
    <hr>
    <div class="btn-group btn-group-justified" role="group" aria-label="...">
        <a href="{{ route('admin.manageordersview') }}" class="btn btn-info" role="button">Manage orders</a>
    </div>
    <hr>
@endsection