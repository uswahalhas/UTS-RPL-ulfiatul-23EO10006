<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
</head>
<body>
<h1>Create a Student</h1>
<div>
    @if($errors->any())
    <ul>
        @foreach($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
        </ul>
        
        @endif
<div>
<form method="post" action="{{route('student.store')}}">
@csrf
@method('post')
<div>  
<label>Name</label>
<input type="string" name="name" placeholder="Name" />
</div>
<div>
<label>Class</label>
<input type="string" name="class" placeholder="Clas" />
</div>
<div>
<label>Lesson</label>
<input type="string" name="lesson" placeholder="Lesson" />
</div>
<div>
<label>Teacher</label>
<input type="string" name="teacher" placeholder="Teacher" />
</div>
<div>
<label>Score</label>
<input type="float" name="score" placeholder="Score" />
</div>
<div>
<input type="submit" value="Save a New Student" />
</form>

</div>
</body>
</html>