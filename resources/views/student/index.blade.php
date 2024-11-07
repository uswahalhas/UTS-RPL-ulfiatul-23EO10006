<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Student</h1>
<div>
    @if (session()->has('success'))
        <div>
        {{session('success')}}
</div>
    @endif
</div>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Class</th>
            <th>Lesson</th>
            <th>Teacher</th>
            <th>Score</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        @foreach ($student as $student)
        <tr>
            <td>{{$student->id}}</td>
            <td>{{$student->name}}</td>
            <td>{{$student->class}}</td>
            <td>{{$student->teacher}}</td>
            <td>{{$student->lesson}}</td>
            <td>{{$student->score}}</td>
            <td>
                <a href="{{route('student.edit', ['student' => $student])}}">Edit</a>
</td>
            <td>
                <form method="post" action="{{route('student.destroy',['student'=>$student])}}">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Delete" />
                </form>
            </td>
</tr>
        @endforeach
<td>
    
</td>
<table>
<div>
</body>
</html>