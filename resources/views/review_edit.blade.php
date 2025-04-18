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
<form enctype="multipart/form-data" method="post" action={{url('review/update') . '/' . $review->id}}>
    @csrf
    <select name="user_id">
        @foreach($users as $user)
            <option value="{{$user->id}}" @if($user->id == old('user_id')) selected @endif>
                {{$user->name}}
            </option>
        @endforeach
    </select>
    @error('user_id')
    <div class="wrong">{{$message}}</div>
    @enderror
    <br>

    <label>rating</label>
    <input type="text" name="rating" value="{{old('rating')}}"/>
    @error('rating')
    <div class="wrong">{{$message}}</div>
    @enderror

    <br>

    <label>review</label>
    <input type="text" name="review" value="{{old('review')}}"/>
    @error('review')
    <div class="wrong">{{$message}}</div>
    @enderror

    <br>

    <label>image</label>
    <input type="file" accept="image/*" name="image" value="{{old('image')}}" alt="wrong image"/>
    @error('image')
    <div class="wrong">{{$message}}</div>
    @enderror

    <br>

    <label>date</label>
    <input type="date" name="date" value="{{old('date')}}"/>
    @error('date')
    <div class="wrong">{{$message}}</div>
    @enderror

    <br>
    <input type="submit">

</form>
</body>
</html>
