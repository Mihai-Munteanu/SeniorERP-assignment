<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

class EmployeesController extends Controller
{
    public function index()
    {
        return view('employees.index', [
            'users' => User::paginate(8),
        ]);
    }

    public function show(User $user)
    {
        $users = User::latest()->get();

        return view('employees.show', [
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

        return redirect('/employees');
    }
}
