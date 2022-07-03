<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();

        return view('users.index', compact('users'));
    }

    public function show(int $id)
    {
        // return User::where('id', $id)->first();
        // return User::findOrFail($id);
        // return User::find($id);

        if (!User::find($id)) {
            return view('users.notFoundUser');
        }
        return User::find($id);
    }
}
