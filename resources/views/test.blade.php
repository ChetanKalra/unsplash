<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    @forelse($photos as $photo)
        <h1>Title: {{ $photo->title }}</h1>
    @empty
        <h1>No photos present!</h1>
    @endforelse

    @auth
        <h1>You are authenticated
    @endauth


    @if(false)
        <h1>True</h1>
    @else
        <h1>Else</h1>
    @endif

    @verbatim
    {{ $name }}
    @endverbatim

    {{-- <h1>Heading 1</h1> --}}


    {{--
    <!-- {{ $name }} -->
    --}}

    @include('includes.footer')

</body>
</html>