<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Zoom Account List</h1>
    @foreach ($zooms as $zoom)
        <div>{{$zoom->zoom_user_id}}</div>
        <hr>
    @endforeach
</body>
</html>