<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>

    <div class="container">
        <h1>Submit a Photo</h1>

        <form action="{{ route('photos.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group">
                <input type="text" class="form-control" name="title" placeholder="title" value="{{ old('title') }}">
            </div>
            @error('title')
                <span class='text-danger'>{{ $message }}</span>
            @enderror

            <div class="form-group">
                <textarea name="description" class="form-control" placeholder="Description" cols="30" rows="10">{{ old('description') }}</textarea>
            </div>
            @error('description')
                <span class='text-danger'>{{ $message }}</span>
            @enderror

            <div class="form-group">
                <select name="category" class="form-control">
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            @error('category')
                <span class='text-danger'>{{ $message }}</span>
            @enderror

            <div class="form-group">
                <input type="file" name="image" class="form-control">
            </div>
            @error('image')
                <span class='text-danger'>{{ $message }}</span>
            @enderror

            <div class="form-group">
                <input type="submit" class="btn btn-primary">
            </div>
        </form>
    </div>
</body>
</html>
