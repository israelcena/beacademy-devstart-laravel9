@extends('template.users')
@section('title', 'Listagem dos times')
@section('body')
<div>
  <ul class="mt-4">
    @foreach ($teams as $team)
       <span class="h5">Time</span><li class="mb-4">
         {{$team->name}}
          <ul>
            {{ !($team->users->count() > 1) ? "Usuário no time:" : "Usuários no time:" }}
            @foreach ($team->users as $user)
              <li>{{ $user->name }}</li>
            @endforeach
          </ul>
      </li>
    @endforeach
  </ul>
</div> 
@endsection