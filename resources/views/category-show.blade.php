@extends('layouts.master')

@section('title')
    Category Show
@endsection


    <h1>{{ $category->name }}</h1>

    <h1>{{ $category->created_at }}</h1>

    <h1>{{ $category->updated_at }}</h1>
