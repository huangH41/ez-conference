<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{route('addZoomAcc')}}" method="POST">
        @csrf
        <div>
            <label for="participant">Participant</label>
            <input type="number" id="participant" name="participant" value="{{old('participant')}}">
        </div>

        <div>
            <label for="price">Price</label>
            <input type="number" id="price" name="price" value="{{old('price')}}">
        </div>

        <div>
            <label for="zoomUserId">Zoom User Id</label>
            <input type="text" id="zoomUserId" name="zoomUserId" value="{{old('zoomUserId')}}">
        </div>

        <button type="submit">Add Zoom Account</button>
    </form>
</body>
</html>