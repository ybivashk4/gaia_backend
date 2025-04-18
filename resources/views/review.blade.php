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
        <td>rating</td>
        <td>review</td>
        <td>date</td>
        <td>image</td>
        <td>actions</td>
    </thread>
    @foreach($reviews as $review)
        <tr>
            <td>{{$review->id}}</td>
            <td>{{$review->user->name}}</td>
            <td>{{$review->rating}}</td>
            <td>{{$review->review}}</td>
            <td>{{$review->date}}</td>
            <td><img width="100px" height="100px" src="{{ asset($review->image)}}" alt="{{$review->image}}"></td>
            <td>
                <a href="{{url('review/edit') . '/' . $review->id}}">edit</a>
                <a href="{{url('review/delete') . '/' . $review->id}}">delete</a>
            </td>
        </tr>
    @endforeach
</table>
<a href="{{url('review/create')}}">create</a>
</body>
</html>
