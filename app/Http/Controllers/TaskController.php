<?php

namespace App\Http\Controllers;
use App\Models\Task;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    // displaying tasks
    public function display() {
        $tasks = Task::orderBy('is_completed')->latest()->get();
        return view('home', [
            'todos' => $tasks
        ]);
    }

    // create tasks
    public function create(){
        return View('create');
    }

    // store tasks in the database
    public function store(){
        $data = request()->validate([
            'task' => ['required', 'max:255'],
        ]);
    
        Task::create($data);
        return redirect('/');
    }

    // update task
    public function update($id) {
        $data = Task::find($id);
        $data->is_completed = now();
        $data->save();
    
        return redirect('/');
    }

    // delete task
    public function delete($id){
        $task = Task::find($id);
        $task->delete();
    
        return redirect('/');
    }
}
