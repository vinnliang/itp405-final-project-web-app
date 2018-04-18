<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;

class PlayerDetailsController extends Controller
{
    public function index($playerID)
    {
      $player = DB::table('players')
      ->join('nfl_team', 'nfl_team.team_id', '=', 'players.team_id')
      ->join('colleges', 'colleges.college_id', '=', 'players.college_id')
      ->join('player_positions', 'player_positions.position_id', '=', 'players.position_id')
      ->where('player_id', '=', $playerID)
      ->first();

      return view('player-details',
      [
        'player' => $player
      ]);
    }

    public function savePlayer($playerID)
    {
      $id = Auth::id();
      $player = DB::table('players')
      ->join('nfl_team', 'nfl_team.team_id', '=', 'players.team_id')
      ->join('colleges', 'colleges.college_id', '=', 'players.college_id')
      ->join('player_positions', 'player_positions.position_id', '=', 'players.position_id')
      ->where('player_id', '=', $playerID)
      ->first();

      DB::table('fantasyroster')
      ->insert(
        ['player_id' => $playerID, 'user_id' => $id ]
      );

      return redirect("/player-details/{$playerID}");
    }

  }
