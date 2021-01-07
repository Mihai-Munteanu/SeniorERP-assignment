<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index()
    {
        $users = User::latest()->get();
        $user = auth()->user();

        return view('roles.index', [
            'user' => $user,
            'users' => $users,
        ]);
    }

    public function update(User $user)
    {
        $attributes = request()->validate([
            'role' => ['string', 'required']
        ]);

        dd(request()->input());

        $user->update([
            'role' => request()->get('rols')
        ]);

        return redirect('/');
    }
}
