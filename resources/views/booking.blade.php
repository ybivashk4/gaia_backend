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
        <td>user_name</td>
        <td>hall_name</td>
        <td>date</td>
        <td>num_uf_guests</td>
        <td>additional_service</td>
        <td>status</td>
    </thread>
    @foreach($booking as $booking_item)
        <tr>
            <td>{{$booking_item->id}}</td>
            <td>{{$booking_item->user->name}}</td>
            <td>{{$booking_item->hall->name}}</td>
            <td>{{$booking_item->date}}</td>
            <td>{{$booking_item->num_uf_guests}}</td>
            <td>{{$booking_item->additional_service}}</td>
            <td>{{$booking_item->status}}</td>
        </tr>
    @endforeach
</table>
</body>
</html>
