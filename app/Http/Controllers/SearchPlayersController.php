<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class SearchPlayersController extends Controller
{
    public function index()
    {
      $players = DB::table('players')
      ->get();
      $teams = DB::table('nfl_team')
      ->get();
      $colleges = DB::table('colleges')
      ->get();
      $positions = DB::table('player_positions')
      ->get();

      return view('search_players',
      [
        'players' => $players,
        'teams' => $teams,
        'colleges' => $colleges,
        'positions' => $positions
      ]);
    }

    public function search(Request $request)
    {
      $first_name = $request->query('first_name');
      $last_name = $request->query('last_name');
      $team = $request->query('team');
      $college = $request->query('college');
      $position = $request->query('position');

      $search = DB::table('players')
      ->join('nfl_team', 'nfl_team.team_id', '=', 'players.team_id')
      ->join('colleges', 'colleges.college_id', '=', 'players.college_id')
      ->join('player_positions', 'player_positions.position_id', '=', 'players.position_id');
      if (isset($first_name) && !empty($first_name))
      {
        $search = $search->where('players.FName', 'LIKE', '%'.$first_name.'%');
      }
      if (isset($last_name) && !empty($last_name))
      {
        $search = $search->where('players.LName', 'LIKE', '%'.$last_name.'%');
      }
      if (isset($team) && !empty($team))
      {
        $search = $search->where('players.team_id', '=', $team);
      }
      if (isset($college) && !empty($college))
      {
        $search = $search->where('players.college_id', '=', $college);
      }
      if (isset($position) && !empty($position))
      {
        $search = $search->where('players.position_id', '=', $position);
      }
      $search = $search->get();

      //dd($search);

      return view('search_results',
      [
        'FName' => $first_name,
        'LName' => $last_name,
        'team' => $team,
        'college' => $college,
        'position' => $position,
        'search' => $search
      ]);
    }

}
