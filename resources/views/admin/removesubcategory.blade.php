@extends('layouts.master')
@section('title')
    Remove SubCategories
@endsection

@section('content')
    <ol class="breadcrumb">
        <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
        <li class="active">Remove SubCategories </li>
    </ol>
    <h1>SubCategories</h1>
    <ul class="list-group-item-warning">
        @foreach($subcategory as $sc)
            <li class="list-group-item"><a href="{{route('admin.removeselectedsubcategory',['id' => $sc->id])}}" class="btn btn-danger" role="button"> Remove: {{$sc->group}} </a></li>
        @endforeach
    </ul>
@endsection