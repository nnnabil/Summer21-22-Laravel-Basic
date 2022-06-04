<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function studentList(){
        // $student = array();

        // for($i=0; $i<5; $i++){
        //     $student = array(
        //         "name" => "Student " . ($i+1),
        //         "id" =>"00" . ($i+1)

        //     );
        //     $students[] = (object)$student; 
        // }

        // return view('student.studentList')->with('students', $students);
            $students = Student::all();
            return view('student.studentList')->with('students', $students);
    }
    public function studentEdit(Request $request){
        $student = Student::where('id', $request->id)->first();
        // return $student;
        return view('student.studentEdit')->with('student', $student);
        // return view('student.studentCreate')->with('student', $student);

    }
    public function studentEditSubmitted(Request $request){
        $student = Student::where('id', $request->id)->first();
        // return  $student;
        $student->name = $request->name;
        $student->student_id = $request->student_id;
        $student->save();
        return redirect()->route('studentList');

    }

    public function studentDelete(Request $request){
        $student = Student::where('id', $request->id)->first();
        $student->delete();

        return redirect()->route('studentList');
    }

    public function studentCreate(){
        return view('student.studentCreate');
    }
    public function studentCreateSubmitted(Request $request){
        $validate = $request->validate([
            "name"=>"required|min:5|max:20",
            "id"=>"required",
            'dob'=>'required',
            'email'=>'email',
            'phone'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/'
        ],
        ['name.required'=>"Please put you name here"]
    );
        $student = new  Student();
        $student->name = $request->name;
        $student->student_id = $request->id;
        $student->save();

        return redirect()->route('studentList');
    }

}
