@extends('layouts.master')

@section('title')
    Category Edit
@endsection

@push('styles')
    <link rel="stylesheet" href="style1.css">
@endpush

@include('modals.confirmation')

@section('content')
    {{ $name }}

    <form action="{{ route('category.update', ['id' => $category->id]) }}" method="POST">

        <input type="text" value="{{ $category->name }}" name="category" placeholder="Category">

        <input type="submit" value="Update Category" />

        @csrf
    </form>
@endsection

@section('content')
    <h1>Heading 1</h1>
@endsection