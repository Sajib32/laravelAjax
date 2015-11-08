<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class TodoController extends Controller
{
    public $restful = true;
    
    public function getIndex() 
    {
        $todos = Todo::all(); 
        return View::make("index")->with("todos", $todos);
    }
    public function postAdd() 
    {
        $todo = new Todo(); 
        $todo->title = Input::get("title");
        $todo->save();
        $last_todo = $todo->id;
        $todos = Todo::whereId($last_todo)->get();
        return View::make("ajaxData")->with("todos", $todos);
    }
    public function postUpdate($id) 
    {
        $task = Todo::find($id); 
        $task->title = Input::get("title"); 
        $task->save();
        return "OK";
    }
}
