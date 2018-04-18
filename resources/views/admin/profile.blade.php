@extends('main-layout')

@section('title', 'Profile')

@section('content')
  <h1>Welcome back, {{$user->name}}</h1>
  </br>
  <!-- <h2>Your user id is {{$user->id}}</h2> -->
  <h2><a href="/profile/fantasyteam">Access your fantasy team</a></h2>
@endsection
