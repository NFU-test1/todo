<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TasksController extends Controller
{
    public function index()
    {
        $tasks = Task::get();
        $data = ['tasks' => $tasks];
        return view('tasks.index', $data);
    }

    public function create()
    {
        return view('tasks.create');
    }

    public function edit()
    {
        $tasks = Task::get();
        $data = ['tasks' => $tasks];
        return view('tasks.edit', $data);
    }

    public function store(Request $request)
    {
        $tasks = new Task;

        $tasks->name = $request->name;

        $tasks->save();
        
        return redirect('/');
    }
    
    public function update(Task $tasks,Request $request)
    {   
        $tasks->name = $request->name;
        $tasks->completed = true;
        $tasks->save();
        
        return redirect('/');
    }


    public function destroy($id)
    {   
        
        $task = Task::find($id);
        $task->delete();
        
        return redirect('/');
    }
    
}
