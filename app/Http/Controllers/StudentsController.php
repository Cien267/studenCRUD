<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Students;
use DB;

class StudentsController extends Controller
{
    //
     public function index(){
         $students = Students::all();
         return view('index')->with('students',$students);
     }

     public function create(){
         return view('create');
     }

     public function store(Request $request){
         Students::create([
             'name' => $request->name,
             'phone' => $request->phone,
             'address' => $request->address,
             'created_at' => now()
         ]);
         return redirect()->route('student.index')->with('success', 'student has been added');
     }

     public function edit(Students $student){
         return view('edit')->with('student', $student);
     }

     public function update(Request $request, Students $student){
        $student->update([
            'name' => $request->name,
            'phone' => $request->phone,
             'address' => $request->address,
             'created_at' => now()
        ]);
        return redirect()->route('student.index')->with('success', 'student has been updated');
     }

     public function destroy(Students $student){
        $student->delete();   
        return redirect()->route('student.index')->with('success', 'student has been deleted');
     }
}
