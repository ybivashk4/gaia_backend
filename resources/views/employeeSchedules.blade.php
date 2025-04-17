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
<h2>Расписание сотрудников:</h2>
<table border="1">
    <thread>
        <td>name</td>
        <td>start</td>
        <td>end</td>
        <td>action</td>
    </thread>
    @foreach($employeeSchedules as $employeeSchedule_item)
        <tr>
            <td>{{$employeeSchedule_item->user->name}}</td>
            <td>{{$employeeSchedule_item->strt_time}}</td>
            <td>{{$employeeSchedule_item->end_time}}</td>
            <td>
                <a href="{{url('employeeSchedule/edit' . '/' . $employeeSchedule_item->id)}}">edit</a>
                <a href="{{url('employeeSchedule/delete' . '/' . $employeeSchedule_item->id)}}">delete</a>
            </td>
        </tr>
    @endforeach
</table>
<br>
<a href="{{url('employeeSchedule/create')}}">create</a>

</body>
</html>
