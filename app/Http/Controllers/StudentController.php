<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentController extends Controller
{
    public function get_data(Request $request) {
        
        if($request->method()=="POST"){


            $students = Student::where('name', 'like', "%" . $request->search . "%")->get();
            
            return view("students", ["data" => $students]);
        } 
        else{
            return view("students", ["data" => Student::all()]);
            
        }
    }

    public function create(Request $request) {
        Student::create($request->all());

        return back();
    }

    public function delete($id) {
        $student = Student::find($id, "id");
        $student->delete();
        return back();
    }

    public function edit(Request $request, $id) {
        $student = Student::find($id, "id");
        $student->update($request->all());
        return back();
    }

}
