<?php

namespace App\Http\Controllers;
use App\Models\Mark;
use Illuminate\Http\Request;

class MarkController extends Controller
{
    public function index(){
        $marks=Mark::get();
        return view('marks.index',compact('marks'));
    }

    public function addMarks(){
        return view('marks.add');
    }

    public function editMarks($id){
        $mark=Mark::find($id);
        return view('marks.edit',compact('mark'));
    }

    public function saveMarks(Request $request){
        $this->validate($request,[
            'sname'=>'required|unique:marks,student_id',
            'term'=>'required',
            'maths'=>'required|integer',
            'science'=>'required|integer',
            'history'=>'required|integer',
            
            
          ],[
             'sname.required'=>'Select a Student !',
             'sname.unique'=>'Student Marks Already Added !',
             'term.required'=>'Select a Term !',
             'maths.integer'=>'Invalid Format ! ( ex 10, 20 ,70 etc... ) ',
             'science.integer'=>'Invalid Format ! ( ex 10, 20 ,70 etc... ) ',
             'history.integer'=>'Invalid Format ! ( ex 10, 20 ,70 etc... ) ',
             'maths.required'=>'Maths Mark Required !',
             'science.required'=>'Science Mark Required !',
             'history.required'=>'History Mark Required !',
             
           
          ]);

          $mark=new Mark();
          $mark->student_id=$request->sname;
          $mark->term=$request->term;
          $mark->maths=$request->maths;
          $mark->science=$request->science;
          $mark->history=$request->history;
          $save=$mark->save();

          if($save){
            smilify('success', 'Student Marks Added...');
              return redirect()->route('marks.index');
           }else{
            smilify('error', 'Error in Student Marks Adding...');
              return redirect()->back();
           }
    }

    public function updateStudent(Request $request,$id){
        
        $mark=Mark::find($id);

        $this->validate($request,[
            'sname'=>'required|unique:marks,student_id,'.$mark->id,
            'term'=>'required',
            'maths'=>'required|integer',
            'science'=>'required|integer',
            'history'=>'required|integer',
            
            
          ],[
             'sname.required'=>'Select a Student !',
             'sname.unique'=>'Student Marks Already Added !',
             'term.required'=>'Select a Term !',
             'maths.integer'=>'Invalid Format ! ( ex 10, 20 ,70 etc... ) ',
             'science.integer'=>'Invalid Format ! ( ex 10, 20 ,70 etc... ) ',
             'history.integer'=>'Invalid Format ! ( ex 10, 20 ,70 etc... ) ',
             'maths.required'=>'Maths Mark Required !',
             'science.required'=>'Science Mark Required !',
             'history.required'=>'History Mark Required !',
             
           
          ]);

         
          $mark->student_id=$request->sname;
          $mark->term=$request->term;
          $mark->maths=$request->maths;
          $mark->science=$request->science;
          $mark->history=$request->history;
          $save=$mark->save();

          if($save){
            smilify('success', 'Student Marks Updated...');
              return redirect()->route('marks.index');
           }else{
            smilify('error', 'Error in Student Marks Updating...');
              return redirect()->back();
           }
    }

    public function deleteMark($id){
      $mark=Mark::find($id);
      $mark->delete();
      smilify('success', 'Student Marks Successfully Deleted...');
      return redirect()->route('marks.index');
  }
}