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
<h2>заказ зала</h2>
<form method="post" action={{url('booking')}}>
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

    <label>название зала:</label>
    <select name="hall_id">
        @foreach($halls as $hall)
            <option value="{{$hall->id}}" @if($hall->id == old('hall_id')) selected @endif>
                {{$hall->name}}
            </option>
        @endforeach
    </select>
    @error('hall_id')
    <div class="wrong">{{$message}}</div>
    @enderror
    <br>

    <label>date</label>
    <input type="date" name="date" value="{{old('date')}}"/>
    @error('date')
    <div class="wrong">{{$message}}</div>
    @enderror

    <br>

    <label>num of guests</label>
    <input type="text" name="num_uf_guests" value="{{old('num_uf_guests')}}"/>
    @error('num_uf_guests')
    <div class="wrong">{{$message}}</div>
    @enderror

    <br>

    <label>additional service</label>
    <input type="text" name="additional_service" value="{{old('additional_service')}}"/>
    @error('additional_service')
    <div class="wrong">{{$message}}</div>
    @enderror

    <br>

    <label>status</label>
    <input type="text" name="status" value="{{old('status')}}"/>
    @error('status')
    <div class="wrong">{{$message}}</div>
    @enderror

    <br>
    <input type="submit">

</form>
</body>
</html>
