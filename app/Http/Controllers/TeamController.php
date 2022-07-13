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
        $TeamsAndUsers = $this->user->load('teams');
        dd($TeamsAndUsers);
    }
}