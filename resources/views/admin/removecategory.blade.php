@extends('layouts.master')

@section('title')
    Remove Category
@endsection
@section('content')
    <ol class="breadcrumb">
        <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
        <li class="active">Remove Categories </li>
    </ol>
    <h1>All categories</h1>
    <ul class="list-group">
        @foreach($category as $c)
            <li class="list-group-item"><a href="{{route('admin.removeselectedcategory',['id' => $c->id])}}" class="btn btn-danger" role="button"> Remove: {{$c->genre}} </a></li>
        @endforeach
    </ul>
@endsection