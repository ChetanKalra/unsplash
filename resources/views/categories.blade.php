<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <th>Category Name</th>
            <th>Actions</th>
        </thead>

        <tbody>
            @foreach($categories as $category)
                <tr>
                    <td>{{ $category->name }}</td>
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
