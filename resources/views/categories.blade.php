@extends('layouts.master')

@section('styles')
    <link rel="stylesheet" href="categories.css">
@endsection

@section('title')
    All Categories
@endsection


@section('content')
    <table>
        <thead>
            <th>Category Name</th>
            <th>Count of Photos</th>
            <th>Actions</th>
        </thead>

        <tbody>
            @foreach($categories as $category)
                <tr>
                    <td>{{ $category->name }}</td>
                    <td>{{ $category->photos->count() }}</td>
                    <td>
                        <a href="{{ route('category.show', ['id' => $category->id]) }}">View</a>
                        <a href="{{ route('category.edit', ['id' => $category->id]) }}">Edit</a>
                        <a href="{{ route('category.delete', ['id' => $category->id]) }}">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection