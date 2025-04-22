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
<h2>Задачи сотрудников:</h2>
<form method="post" action={{url('employeeTasks')}}>
    @csrf
    <select name="employee_id">
        @foreach($employees as $employee)
            <option value="{{$employee->id}}" @if($employee->id == old('employee_id')) selected @endif>
                {{$employee->name}}
            </option>
        @endforeach
    </select>
    @error('employee_id')
    <div class="wrong">{{$message}}</div>
    @enderror
    <br>

    <label>description</label>
    <input type="text" name="task_description" value="{{old('task_description')}}"/>
    @error('task_description')
    <div class="wrong">{{$message}}</div>
    @enderror

    <br>

    <label>status</label>
    <input type="text" name="task_status" value="{{old('task_status')}}"/>
    @error('task_status')
    <div class="wrong">{{$message}}</div>
    @enderror

    <br>

    <label>task created</label>
    <input type="datetime-local" name="task_created_at" value="{{old('task_created_at')}}"/>
    @error('task_created_at')
    <div class="wrong">{{$message}}</div>
    @enderror

    <br>

    <label>task complete</label>
    <input type="date" name="task_completed_at" value="{{old('task_completed_at')}}"/>
    @error('task_completed_at')
    <div class="wrong">{{$message}}</div>
    @enderror

    <br>
    <input type="submit">

</form>
</body>
</html>
