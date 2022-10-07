<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    public function index () {
        $tasks = Task::all();

        return view('index', compact('tasks'));

    }

    public function create () {
        return view('tasks.create');
    }
   
    public function store (Request $request) {
        $task = new Task();

        $task->title = $request->title;
        $task->description = $request->description;
        $task->status = $request->status;
        $task->progress =  $request->progress;

        $task->save();

        return redirect('/')->with('status', 'Task Created Successfully');
    }

    public function edit ($id) {
        $task = Task::findOrFail($id);
        return view('tasks.edit', compact('task'));
    }
}
