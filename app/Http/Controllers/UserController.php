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
        $user = User::find($id);
        // Modos de retornar apenas um usuário
        // return User::where('id', $id)->first();
        // return User::findOrFail($id); // retorna ou falha
        // return User::find($id);

        if (!$user) {
            return view('users.notFoundUser');
        }
        return view('users.show', compact('user'));
    }
}
