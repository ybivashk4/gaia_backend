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
<h2>Отзывы</h2>
<form enctype="multipart/form-data" method="post" action={{url('shop')}}>
    @csrf

    <label>category</label>
    <input type="text" name="category" value="{{old('category')}}"/>
    @error('category')
    <div class="wrong">{{$message}}</div>
    @enderror

    <br>

    <label>name</label>
    <input type="text" name="name" value="{{old('name')}}"/>
    @error('name')
    <div class="wrong">{{$message}}</div>
    @enderror

    <br>

    <label>description</label>
    <input type="text" name="description" value="{{old('description')}}"/>
    @error('description')
    <div class="wrong">{{$message}}</div>
    @enderror

    <br>

    <label>price</label>
    <input type="text" name="price" value="{{old('price')}}"/>
    @error('price')
    <div class="wrong">{{$message}}</div>
    @enderror

    <br>

    <label>image</label>
    <input type="file" accept="image/*" name="image" value="{{old('image')}}" alt="wrong image"/>
    @error('image')
    <div class="wrong">{{$message}}</div>
    @enderror

    <br>

    <input type="submit">

</form>
</body>
</html>
