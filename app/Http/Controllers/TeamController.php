<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Models\User;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function __construct(public User $user, public Team $team)
    {
    }

    public function index()
    {
        $teams = $this->team->get();
        $teams->load('users');
        return view('teams.index', compact('teams'));
    }
}