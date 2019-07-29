<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TodoList;

class TodoListController extends Controller
{
    public function get_data(Request $request) {
        return view("todo_list", ["data" => TodoList::all()]);
    }

    public function create(Request $request) {
        TodoList::create($request->all());

        return back();
    }

    public function delete($id) {
        $student = TodoList::find($id, "id");
        $student->delete();
        return back();
    }
}
