<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TaskRequest;
use App\Models\Task;

class TaskController extends Controller
{
    public function index(){
        $tasks = Task::all();
        return view('task.index', compact('tasks'));
    }

    public function create(){
        return view('task.create');
    }
    
    public function show(Task $task){
        return view('task.show', compact('task'));
    }

    public function edit($id){
        $tasks = Task::find($id);
        return view('task.edit', compact('tasks'));
    }
    public function delete($id)
    {
    $task = Task::find($id); // Mencari task berdasarkan ID dan fail jika tidak ditemukan
    $task->delete(); // Menghapus task

    return redirect('/task')->with('success', 'Task deleted successfully');
    }


    public function update(TaskRequest $request){
        $validatedData = $request->validated();
        Task::where('id', $request['id'])->update($validatedData);
        return redirect('/task');
    }

    public function store(TaskRequest $request){
        $validatedData = $request->validated();
        Task::create($validatedData);
        return redirect('/task');
    }

}