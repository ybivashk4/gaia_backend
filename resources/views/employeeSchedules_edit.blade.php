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
<form method="post" action={{url('employeeSchedule/update/' . $employeeSchedule->id)}}>
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

    <label>start time</label>
    <input type="datetime-local" name="start_time" value="@if(old('start_time')) {{old('start_time')}} @else {{$employeeSchedule->start_time}} @endif"/>

    @error('start_time')
    <div class="wrong">{{$message}}</div>
    @enderror

    <br>

    <label>end time</label>
    <input type="datetime-local" name="end_time" value="@if(old('end_time')) {{old('end_time')}} @else {{$employeeSchedule->end_time}} @endif"/>
    @error('end_time')
    <div class="wrong">{{$message}}</div>
    @enderror

    <br>
    <input type="submit">

</form>
</body>
</html>
