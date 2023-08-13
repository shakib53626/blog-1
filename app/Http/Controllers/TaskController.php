<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tasks = Task::with('user')->get();
        return view('admin.modules.task.index', compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::pluck('name', 'id');
        return view('admin.modules.task.create', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $this->validate($request,[
        //     'title' => 'required',
        //     'task_description' => 'required',
        //     'task_status' => 'required',
        //     'task_deadline' => 'required',
        //     'task_user' => 'required',
        // ]);
        
        Task::create($request->all());
        return redirect()->route('task.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $task = Task::with('user')->findOrFail($id);
        return view('admin.modules.task.show', compact('task'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $users = User::pluck('name', 'id');
        $task = Task::findOrFail($id);
       return view('admin.modules.task.edit', compact('task', 'users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
       $task = Task::findOrFail($id);
       $task->update($request->all());
       return redirect()->route('task.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $task = Task::findOrFail($id);
        $task->delete();
        return redirect()->route('task.index');
    }
}
