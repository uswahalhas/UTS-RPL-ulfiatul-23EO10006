<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Student;
class StudentController extends Controller
{
    public function index(){
        $student = Student::all();
        return view('student.index', ['student' => $student]);
    }
        public function create(){
            return view('student.create');
            }
            public function store(Request $request){
                $data = $request->validate([
                'name' => 'required|string',
                'class' => 'required|string',
                'lesson' => 'required|string',
                'teacher' => 'required|string',
                'score' => 'required|numeric'

                ]);
            
                Student::create($data);
            
                return redirect(route('student.index'));
            }
            
            public function edit(Student $student){
                return view('student.edit', ['student' => $student]);
            }
            public function update(Student $student, Request $request){
                $data = $request->validate([
                'name' => 'required|string',
                'class' => 'required|string',
                'lesson' => 'required|string',
                'teacher' => 'required|string',
                'score' => 'required|numeric'
                ]);
            $student->update($data);
                return redirect(route('student.index'))->with('success', 'Student Update Successfully');
            }  
            public function destroy(Student $student){
                $student->delete();
                return redirect(route('student.index'))->with('success', 'Student Deleted Succesfully');
            }
}   