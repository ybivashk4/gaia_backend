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
<h2>Добавление зала</h2>
<form enctype="multipart/form-data" method="post" action={{url('menu/update') . '/' . $menu->id}}>
    @csrf

    <label>category</label>
    <input type="text" name="category" value="@if(old('category')) {{old('category')}} @else {{$menu->category}} @endif"/>
    @error('category')
    <div class="wrong">{{$message}}</div>
    @enderror

    <br>

    <label>name</label>
    <input type="text" name="name" value="@if(old('name')) {{old('name')}} @else {{$menu->name}} @endif"/>
    @error('name')
    <div class="wrong">{{$message}}</div>
    @enderror

    <br>

    <label>description</label>
    <input type="text" name="description" value="@if(old('description')){{old('description')}} @else {{$menu->description}} @endif"/>
    @error('description')
    <div class="wrong">{{$message}}</div>
    @enderror

    <br>

    <label>price</label>
    <input type="text" name="price" value="@if(old('price')) {{old('price')}} @else {{$menu->price}} @endif"/>
    @error('price')
    <div class="wrong">{{$message}}</div>
    @enderror

    <br>

    <label>allergens</label>
    <input type="text" name="allergens" value="@if(old('allergens')) {{old('allergens')}} @else {{$menu->allergens}} @endif"/>
    @error('allergens')
    <div class="wrong">{{$message}}</div>
    @enderror

    <br>

    <label>image</label>
    <img src="../../{{ asset($menu->image)}}" alt="error" width="100px" height="100px">
    <input type="file" accept="image/*" name="image" value="@if(old('image')) {{old('image')}} @else{{'../../'.asset($menu->image)}}@endif" alt="wrong image"/>
    @error('image')
    <div class="wrong">{{$message}}</div>
    @enderror
    <br>
    <input type="submit">

</form>
</body>
</html>
