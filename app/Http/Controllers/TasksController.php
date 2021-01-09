<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\User;
use App\Filters\TaskFilters;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class TasksController extends Controller
{
    public function index()
    {
        $tasks = auth()->user()->allocations();

        if (request()->get('order_by')) {
            $tasks = $tasks->orderBy(request()->get('order_by'), request()->get('order_direction')); //it is not applicable as the table implemented from Tailwind has incorporated the sort function. if this should be the case, we would be using the following url dashboard?order_by=due_date&order_direction=asc
        }

        // if (request()->get('limit')) {
        //     $tasks = $tasks->take(request()->get('limit')); //it is not applicable as the table implemented from Tailwind has incorporated the sort function. if this should be the case, we would be using the following url dashboard?order_by=due_date&order_direction=asc
        // }
        // }

        // if (request()->get('page')) {
        //     $tasks = $tasks->altceva(request()->get('page')); //it is not applicable as the table implemented from Tailwind has incorporated the sort function. if this should be the case, we would be using the following url dashboard?order_by=due_date&order_direction=asc
        // }

        return view('tasks.index', [
            'tasks' => $tasks->get(),
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
