<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class SupervisionController extends Controller
{
    public function index()
    {
        $supervisions = User::latest()->get();

        return view('ChooseYourSupervisor', [
        'supervisions' =>$supervisions
        ]);
    }
}
