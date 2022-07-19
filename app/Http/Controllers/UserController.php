<?php

namespace App\Http\Controllers;

use App\Exceptions\UserControllerException;
use App\Models\User;
use App\Http\Requests\UserForm;
use Illuminate\Http\Request;

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
        $user = User::find($id);
        //         Modos de retornar apenas um usuário
        //         return User::where('id', $id)->first();
        //         return User::findOrFail($id); // retorna ou falha
        //         return User::find($id);

        // if (!$user) {
        //     return view('users.notFoundUser');
        // }
        if (!$user) {
            throw new UserControllerException('Esse usuário não existe!');
        }

        // all user teams 
        $user->load('teams');
        // all user posts 
        $user->load('posts');

        // remove all user posts
        // $user->posts()->delete();

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

        // $req->session()->flash('create', 'Usuário cadastrado com sucesso');

        return redirect()->route('users.index')->with('create', 'usuário cadastrado po!');
    }

    public function edit($userEditId)
    {
        $user = $this->model->find($userEditId);
        if (!$user) {
            throw new UserControllerException('Não é permitido editar um usuário que não existe!');
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

        // $this->model->fill($data)->save();
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

    public function search(Request $request)
    {
        $users = $this->model->searchUsers(
            $request->search ?? ''
        )->paginate(8);

        return view('users.search', compact('users'));
    }
}
