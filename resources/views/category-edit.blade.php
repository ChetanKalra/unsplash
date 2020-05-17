<html>
<head>
    <title>Create Category</title>
</head>

<body>
    <form action="{{ route('category.update', ['id' => $category->id]) }}" method="POST">

        <input type="text" value="{{ $category->name }}" name="category" placeholder="Category">

        <input type="submit" value="Update Category" />

        @csrf
    </form>
</body>

</html>
