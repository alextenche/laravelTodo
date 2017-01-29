<?php

namespace App\Http\Controllers;

use App\TodoList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

class TodoListController extends Controller
{
    public function index()
    {
        $todo_lists = TodoList::all();
        return view('todos.index')->with('todo_lists', $todo_lists);
    }

    public function show($id){
        $list = TodoList::findOrFail($id);
        return view('todos.show')->withList($list);
    }

    public function create(){
        return view('todos.create');
    }

    public function store(Request $request){
//        $rules = array('title', array('required', 'unique:todo_lists,name'));
//        $validator = Validator::make(Input::all(), $rules);
//        if ($validator->fails()) {
//            return Redirect::route('todos.create');
//        }
        $this->validate($request,
            ['title' => 'required|unique:todo_lists,name']
        );



        $name = Input::get('title');
        $list = new TodoList();
        $list->name = $name;
        $list->save();
        return Redirect::route('todos.index');
    }
}
