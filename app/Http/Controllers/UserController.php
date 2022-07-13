<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\UserForm;

class UserController extends Controller
{
    public function __construct(User $user)
    {
        $this->model = $user;
    }

    public function index()
    {
        // $users = $this->model::all();
        $users = $this->model::paginate(8);

        return view('users.index', compact('users'));
    }

    public function show(int $id)
    {
        $user = User::findOrFail($id);
        //         Modos de retornar apenas um usuário
        //         return User::where('id', $id)->first();
        //         return User::findOrFail($id); // retorna ou falha
        //         return User::find($id);

        if (!$user) {
            return view('users.notFoundUser');
        }

        $teams = $user->load('teams');

        return view('users.show', compact('user'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(UserForm $req)
    {
        // $user = new User;
        // $user->name = $req->name;
        // $user->email = $req->email;
        // $user->password = bcrypt($req->password);
        // $user->save();

        $data = $req->all();
        $data['password'] = bcrypt($req->password);
        if ($req['image']) {
            $file = $req['image'];
            $pathName = $file->store('profile', 'public');
            $data['image'] = $pathName;
        }
        $this->model->create($data);

        return redirect()->route('users.index');
    }

    public function edit($userEditId)
    {
        $user = $this->model->find($userEditId);
        if (!$user) {
            return redirect()->route('users.index');
        }
        return view('users.edit', compact('user'));
    }

    public function update(UserForm $req, $id)
    {
        $user = $this->model->find($id);
        if (!$user) {
            return redirect()->route('users.index');
        }

        $data = $req->only('name', 'email');
        if ($req->password) {
            $data['password'] = bcrypt($req->password);
        }
        $user->update($data);
        return redirect()->route('users.show', $user->id);
    }

    public function destroy($id): string
    {
        $user = $this->model->find($id);
        if (!$user) {
            return redirect()->route('users.index');
        }
        $user->delete();
        return redirect()->route('users.index');
    }

    public function healthCheck(): string
    {
        return "Health Check!";
    }
}