<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TodoList;

class TodoListController extends Controller
{
    public function get_data(Request $request) {
        if ($request->isMethod('post')) {
            if ($request->del == "true") {
                TodoList::destroy($request->id);
            } else {
                TodoList::create(["data" => $request->data]);
            }
        }
        return view("todo_list", new TodoList(["data" => TodoList::all()]));
    }

    public function add_data(Request $request) {
        TodoList::create(["data" => $request->input("data")]);
    }
}
