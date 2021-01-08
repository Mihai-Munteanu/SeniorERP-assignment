<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        $users = User::latest()->get();

        return view('employee.index', [
            'users' => $users,
        ]);
    }

    public function show(User $user)
    {
        $users = User::latest()->get();
        //$user = auth()->user();

        return view('employee.show', [
            'users' => $users,
            'user' => $user,
        ]);
    }

    public function update(User $user)
    {
        $this->validate(request(), [
            'role' => ['string', 'required']
        ]);

        $user->role = request('role');
        $user->save();

        return redirect('/employee-list');
    }
}
