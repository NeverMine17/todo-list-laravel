<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;

class StudentController extends Controller
{
    public function get_data(Request $request) {
        return view("students", ["data" => Student::all()]);
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
}
