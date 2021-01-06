<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;



class TasksController extends Controller
{

    public function index()
    {
        return view('myTasks', [
            'tasks' => auth()->user()->myTasks()
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

        return redirect('/tasks');
    }

    public function create()
    {
        $users = User::latest()->get();

        return view('createTasks', [
            'users' => $users
        ]);
    }
}
