<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    @toastr_css
</head>
<body>

    <div class="container">

        @if(Session::has('success'))
            <div class="alert alert-success" role="alert">
                {{ Session::get('success') }}
            </div>
        @endif

        <h2>Update Category</h2>

        <form action="{{ route('categories.update', ['category' => 3]) }}" method="POST">
            @csrf

            @method('PUT')

            <input type="text" name="name" placeholder="Enter Category Name">

            @error('name')
                {{ $message }}
            @enderror

            <input type="submit" class="btn btn-info">
        </form>
    </div>

    @jquery
    @toastr_js
    @toastr_render
</body>
</html>