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
        <td>image</td>
        <td>actions</td>
    </thread>
    @foreach($shop as $shop_item)
        <tr>
            <td>{{$shop_item->id}}</td>
            <td>{{$shop_item->category}}</td>
            <td>{{$shop_item->name}}</td>
            <td>{{$shop_item->description}}</td>
            <td>{{$shop_item->price}}</td>
            <td><img width="100px" height="100px" src="{{ asset($shop_item->image)}}" alt="{{$shop_item->image}}"></td>
            <td>
                <a href="{{url('shop/edit') . '/' . $shop_item->id}}">edit</a>
                <a href="{{url('shop/delete') . '/' . $shop_item->id}}">delete</a>
            </td>
        </tr>
    @endforeach
</table>
<a href="{{url('shop/create')}}">create</a>
</body>
</html>
