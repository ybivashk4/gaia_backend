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
    @if($user)
        <h2>Привет, {{$user->name}}</h2>
        <a href="{{url('logout')}}">Выйти из системы</a>
    @else
        <h2>Вход в систему</h2>
        <form method="POST" action="{{url('auth')}}" >
            @csrf
            <div>Почта</div>
            <input name="email" type="email" value="{{old('email')}}">
            @error('email')
            <div style="color: red">{{$message}}</div>
            @enderror
            <div>Пароль</div>
            <input name="password" type="password">
            @error('password')
            <div style="color: red">{{$message}}</div>
            @enderror
            <input type="submit">
        </form>
        @error('$error')
        <div style="color: red">{{$message}}</div>
        @enderror
    @endif
</body>
</html>
