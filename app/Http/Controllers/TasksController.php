<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\User;
use App\Filters\TaskFilters;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

class TasksController extends Controller
{
      public function index()
    {
        $tasks = auth()->user()->allocations();

        if (request()->get('order_by')) {
            $tasks = $tasks->orderBy(request()->get('order_by'), request()->get('order_direction'));
        }

        if (request()->get('orderByRaw') == "importanceup") {
            $tasks = $tasks->orderByRaw("FIELD(importance, 'Low', 'Medium', 'High')");
        } elseif (request()->get('orderByRaw') == "importancedown") {
            $tasks = $tasks->orderByRaw("FIELD(importance, 'High', 'Medium', 'Low')");
        }

        return view('tasks.index', [
            'tasks' => $tasks->paginate(8)->withQueryString(),
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'task' => 'required',
            'description' => 'required',
            'allocated_to' => 'required',
            'due_date' => 'required',
            'importance' => 'required',
        ]);

        $tasks = Task::create([
            'user_id' => auth()->id(),
            'task' => request('task'),
            'description' => request('description'),
            'allocated_to' => request('allocated_to'),
            'due_date' => request('due_date'),
            'importance' => request('importance'),
        ]);

        return redirect('/dashboard');
    }

    public function create()
    {
        return view('tasks.create');
    }

    public function destroy(Task $task)
    {
        if ($task->user_id != auth()->id()) {
            abort(403, 'You do not have permision to do this.');
        }

        $task->delete();

        return redirect()->back();
    }

    public function createdByMe()
    {
        $tasks = auth()->user()->tasks();

        if (request()->get('order_by')) {
            $tasks = $tasks->orderBy(request()->get('order_by'), request()->get('order_direction'));
        }

        if (request()->get('orderByRaw') == "importanceup") {
            $tasks = $tasks->orderByRaw("FIELD(importance, 'Low', 'Medium', 'High')");
        } elseif (request()->get('orderByRaw') == "importancedown") {
            $tasks = $tasks->orderByRaw("FIELD(importance, 'High', 'Medium', 'Low')");
        }

        return view('tasks.tasks_created_by_me', [
        'tasks' => $tasks->paginate(8)->withQueryString(),
        ]);
    }
}
