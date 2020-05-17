<html>
<head>
    <title>Create Category</title>
</head>

<body>
    <form action="{{ route('category.store') }}" method="POST">

        <input type="text" name="category" placeholder="Category">

        <input type="submit" value="Create Category" />

        @csrf
    </form>
</body>

</html>
