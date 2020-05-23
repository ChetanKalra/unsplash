<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
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
</body>
</html>
