<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HierarchyController extends Controller
{
    public function index()
    {
        $supervisions = User::latest()->get();

        return view('hierarchy', [
            'supervisions' =>$supervisions
        ]);

    }
}
