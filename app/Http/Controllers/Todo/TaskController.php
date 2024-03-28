<?php

namespace App\Http\Controllers\Todo;

use App\Models\Todo\Task;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        return view('question6.index', compact('tasks'));
    }

    public function create()
    {
        return view('question6.create');
    }

    public function store(Request $request)
    {
        Task::create($request->validate([
            'title' => 'required|string|max:255',
        ]));

        return redirect()->route('tasks.index')->with('success', 'Task created successfully.');
    }

    public function edit(Task $task)
    {
        return view('question6.edit', compact('task'));
    }

    public function update(Request $request, Task $task)
    {
        $task->update($request->validate([
            'title' => 'required|string|max:255',
        ]));

        return redirect()->route('tasks.index')->with('success', 'Task updated successfully.');
    }

    public function destroy(Task $task)
    {
        $task->delete();
        return redirect()->route('tasks.index')->with('success', 'Task deleted successfully.');
    }
}
