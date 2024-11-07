<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <div>
        </div>
    <form method="post" action="{{route('student.update', ['student'=> $student])}}">
    @csrf
    @method('put')
    <div>
        <label>Name</label>
        <input type="string" name="name" placeholder="Name" value="{{$student->name}}"/>
    </div>
    <div>
        <label>Class</label>
        <input type="string" name="class" placeholder="Class" value="{{$student->class}}"/>
    </div>
    <div>
        <label>Lesson</label>
        <input type="string" name="lesson" placeholder="Lesson" value="{{$student->lesson}}"/>
    </div>
    <div>
        <label>Teacher</label>
        <input type="string" name="teacher" placeholder="Teacher" value="{{$student->teacher}}"/>
    </div>
    <div>
    <label>Score</label>
        <input type="float" name="score" placeholder="Score" value="{{$student->score}}"/>
    </div>
    <div>
        <input type="submit" value="Update" />
</div>
    </body>
    </html>