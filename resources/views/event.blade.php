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
        <td>title</td>
        <td>description</td>
        <td>date</td>
        <td>image</td>
        <td>actions</td>
    </thread>
    @foreach($event as $event_item)
        <tr>
            <td>{{$event_item->id}}</td>
            <td>{{$event_item->title}}</td>
            <td>{{$event_item->description}}</td>
            <td>{{$event_item->date}}</td>
            <td>
                <img width="100px" height="100px" src="{{ asset($event_item->image)}}" alt="{{$event_item->image}}">
            </td>
            <td>
                <a href="{{url('event/edit' . '/' . $event_item->id)}}">edit</a>
                <a href="{{url('event/delete' . '/' . $event_item->id)}}">delete</a>
            </td>
        </tr>
    @endforeach
</table>
<a href="{{url('event/create')}}">create</a>
</body>
</html>
