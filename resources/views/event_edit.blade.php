<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        .wrong {
            color: rgba(218, 27, 55, 0.64);
        }
    </style>
</head>
<body>
<h2>Создание эвента</h2>
<form method="post" action={{url('event/update' . '/' . $event->id)}}>
    @csrf

    <label>title</label>
    <input type="text" name="title" value="{{old('title')}}"/>
    @error('title')
    <div class="wrong">{{$message}}</div>
    @enderror

    <br>

    <label>description</label>
    <input type="text" name="description" value="{{old('description')}}"/>
    @error('description')
    <div class="wrong">{{$message}}</div>
    @enderror

    <br>

    <label>date</label>
    <input type="date" name="date" value="{{old('date')}}"/>
    @error('date')
    <div class="wrong">{{$message}}</div>
    @enderror

    <br>

    <label>image</label>
    <input type="image" name="image" value="{{old('image')}}" alt="wrong image"/>
    @error('image')
    <div class="wrong">{{$message}}</div>
    @enderror

    <br>
    <input type="submit">

</form>
</body>
</html>
