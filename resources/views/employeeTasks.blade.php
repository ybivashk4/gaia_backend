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
<h2>Меню:</h2>
<table border="1">
    <thread>
        <td>name</td>
        <td>task description</td>
        <td>task status</td>
        <td>task created at</td>
        <td>task completed at</td>
    </thread>
    @foreach($employeeTasks as $employeeTasks_item)
        <tr>
            <td>{{$employeeTasks_item->employee->name}}</td>
            <td>{{$employeeTasks_item->task_description}}</td>
            <td>{{$employeeTasks_item->task_status}}</td>
            <td>{{ $employeeTasks_item->task_creaated_at}}</td>
            <td>{{ $employeeTasks_item->tassk_completed_at}}</td>
        </tr>
    @endforeach
</table>
</body>
</html>
