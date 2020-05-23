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
            <th>Name</th>
            <th>Email</th>
            <th>Portfolio</th>
            <th>Location</th>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->profile->portfolio }}</td>
                    <td>{{ $user->profile->location }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
