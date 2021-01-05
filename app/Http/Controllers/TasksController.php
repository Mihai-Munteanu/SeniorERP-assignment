<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;



class TasksController extends Controller
{

    public function index()
    {
        $tasks = Task::latest()->get();

        return view('myPage', [
            'tasks' => $tasks
        ]);


    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
        ]);

        $tasks = Task::create([
            'user_id' => auth()->id(),
            'title' => request('title'),
            'body' =>request('body'),
        ]);

        return redirect('/tasks');

    }
}
