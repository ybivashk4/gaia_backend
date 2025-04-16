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
    @foreach($menu as $menu_item)
        <tr>
            <td>{{$menu_item->id}}</td>
            <td>{{$menu_item->category}}</td>
            <td>{{$menu_item->name}}</td>
            <td>{{$menu_item->description}}</td>
            <td>{{$menu_item->price}}</td>
            <td>{{$menu_item->allergens}}</td>
            <td><img width="100px" height="100px" src="{{ asset($menu_item->image)}}" alt="{{$menu_item->image}}"></td>
        </tr>
    @endforeach
</table>
</body>
</html>
