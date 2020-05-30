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
        <div class="row">
            @foreach($photos as $photo)
                <div class="col-lg-4">
                    <div class="card">
                        <img class="card-img-top" src="{{ asset($photo->path) }}" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">{{ $photo->title }}</h5>
                            <p class="card-text">{{ $photo->description }}</p>
                            <span>{{ $photo->category->name }}</span>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>