<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Mark;

class StudentController extends Controller
{

    public function index(){
      $student_count=Student::count();
      $marks_count=Mark::count();
      return view('index',compact('student_count','marks_count'));
    }

    public function addStudent(){
        return view('student.add');
    }

    public function allStudents(){
        $students=Student::get();
        return view('student.index',compact('students'));
    }

    public function editStudent($id){
       $student=Student::find($id);
       return view('student.edit',compact('student'));
    }

    public function saveStudent(Request $request){
        $this->validate($request,[
            'sname'=>'required',
            'age'=>'required|integer',
            'gender'=>'required',
            'teacher'=>'required',
            
          ],[
             'sname.required'=>'Student Name Required !',
             'age.required'=>'Student Age Required !',
             'age.integer'=>'Invalid Format ! ( ex 10, 20 etc... ) ',
             'gender.required'=>'Student Gender Required !',
             'teacher.required'=>'Select a Reporting  Teacher !',
           
          ]);

          $student=new Student();
          $student->student_name=$request->sname;
          $student->age=$request->age;
          $student->gender=$request->gender;
          $student->represent_teacher=$request->teacher;
          $save=$student->save();

          if($save){
            smilify('success', 'Student Successfully Added...');
              return redirect()->route('student.index');
           }else{
            smilify('error', 'Error in Student Adding...');
              return redirect()->back();
           }

          
    }

    public function updateStudent(Request $request,$id){
        
        $this->validate($request,[
            'sname'=>'required',
            'age'=>'required|integer',
            'gender'=>'required',
            'teacher'=>'required',
            
          ],[
             'sname.required'=>'Student Name Required !',
             'age.required'=>'Student Age Required !',
             'age.integer'=>'Invalid Format ! ( ex 10, 20 etc... ) ',
             'gender.required'=>'Student Gender Required !',
             'teacher.required'=>'Select a Reporting  Teacher !',
           
          ]);

          $student=Student::find($id);
          $student->student_name=$request->sname;
          $student->age=$request->age;
          $student->gender=$request->gender;
          $student->represent_teacher=$request->teacher;
          $save=$student->save();

          if($save){
            smilify('success', 'Student Successfully Updated...');
              return redirect()->route('student.index');
           }else{
            smilify('error', 'Error in Student Updating...');
              return redirect()->back();
           }

    }

    public function deleteStudent($id){
        $student=Student::find($id);
        $student->delete();
        smilify('success', 'Student Successfully Deleted...');
        return redirect()->route('student.index');
    }
}