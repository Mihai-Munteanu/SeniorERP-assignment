<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;



class TasksController extends Controller
{
    public function index()
    {
        return view('tasks.index', [
            'tasks' => auth()->user()->allocations,
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
            'allocated_to' => 'required',
            'due_date' => 'required',
            'importance' => 'required',
        ]);

        $tasks = Task::create([
            'user_id' => auth()->id(),
            'title' => request('title'),
            'body' =>request('body'),
            'allocated_to' =>request('allocated_to'),
            'due_date' => request('due_date'),
            'importance' => request('importance'),
        ]);

        return redirect('/dashboard');
    }

    public function create()
    {
        $currentUser = auth()->user();

        return view('tasks.create', [
            'currentUser' => $currentUser,

        ]);
    }

    public function destroy(Task $task)
    {
        if ($task->user_id != auth()->id()) {
            abort(403, 'You do not have permision to do this.');
        }

        $task->delete();

        return redirect('/dashboard');
    }
}
