<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h2>Меню:</h2>
<table border="1">
    <thread>
        <td>id</td>
        <td>category</td>
        <td>name</td>
        <td>description</td>
        <td>price</td>
        <td>allergens</td>
        <td>image</td>
    </thread>
    @foreach($hall as $hall_item)
        <tr>
            <td>{{$hall_item->id}}</td>
            <td>{{$hall_item->name}}</td>
            <td>{{$hall_item->description}}</td>
            <td>{{$hall_item->capacity}}</td>
            <td>{{$hall_item->allergens}}</td>
            <td><img width="100px" height="100px" src="{{ asset($hall_item->image)}}" alt="{{$hall_item->image}}"> </td>
        </tr>
    @endforeach
</table>
</body>
</html>
