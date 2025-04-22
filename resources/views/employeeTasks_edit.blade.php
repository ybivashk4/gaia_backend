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
<form method="post" action={{url('employeeTasks/update' . '/' . $employeeTask->id)}}>
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
    <input type="text" name="task_description" value="@if(old('task_description')) {{old('task_description')}} @else {{$employeeTask->task_description}} @endif"/>
    @error('task_description')
    <div class="wrong">{{$message}}</div>
    @enderror

    <br>

    <label>status</label>
    <input type="text" name="task_status" value="@if(old('task_status')) {{old('task_status')}} @else {{$employeeTask->task_status}} @endif"/>
    @error('task_status')
    <div class="wrong">{{$message}}</div>
    @enderror

    <br>

    <label>task created</label>
    <input type="datetime-local" name="task_created_at" value="@if(old('task_created_at')) {{old('task_created_at')}} @else {{$employeeTask->task_created_at}} @endif"/>
    @error('task_created_at')
    <div class="wrong">{{$message}}</div>
    @enderror

    <br>

    <label>task complete</label>
    <input type="datetime-local" name="task_completed_at" value="@if(old('task_completed_at')) {{old('task_completed_at')}} @else {{$employeeTask->task_completed_at}} @endif"/>
    @error('task_completed_at')
    <div class="wrong">{{$message}}</div>
    @enderror

    <br>
    <input type="submit">

</form>
</body>
</html>
