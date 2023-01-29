<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
class StudentController extends Controller
{
    public function student()
    {
        return view('student');
    }
    public function show(Request $request )
    {
        $student = new student();
        $student->name=$request->name;
        $student->rollno=$request->rollno;
        $student->address=$request->address;
        $student->save();

        return redirect('/information');
    }

    public function information(){
        $students=Student::all();
        return view('information',compact('students'));
    }
}
