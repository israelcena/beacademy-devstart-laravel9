<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct(User $user)
    {
        $this->model = $user;
    }

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

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $req)
    {
        // $user = new User;
        // $user->name = $req->name;
        // $user->email = $req->email;
        // $user->password = bcrypt($req->password);
        // $user->save();

        $data = $req->all();
        $data['password'] = bcrypt($req->password);
        $this->model->create($data);

        return redirect()->route('users.index');
    }
}
