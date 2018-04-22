<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Redirect;
use Auth;
class FantasyController extends Controller
{
    public function index()
    {
      $id = Auth::id();

      $search = DB::table('fantasyroster')
      ->join('players', 'players.player_id', '=', 'fantasyroster.player_id')
      ->join('nfl_team', 'nfl_team.team_id', '=', 'players.team_id')
      ->join('colleges', 'colleges.college_id', '=', 'players.college_id')
      ->join('player_positions', 'player_positions.position_id', '=', 'players.position_id')
      ->where('user_id', '=', $id);

      $playersearch = (clone $search)->get();
      $qbsearch = (clone $search)->where('player_positions.position_id', '=', '1')->get();
      $rbsearch = (clone $search)->where('player_positions.position_id', '=', '2')->orwhere('player_positions.position_id', '=', '3')->get();
      $wrsearch = (clone $search)->where('player_positions.position_id', '=', '4')->get();
      $tesearch = (clone $search)->where('player_positions.position_id', '=', '8')->get();
      $ksearch = (clone $search)->where('player_positions.position_id', '=', '20')->get();

      return view('fantasyteam',
      [
        'playerlist' => $playersearch,
        'qblist' => $qbsearch,
        'rblist' => $rbsearch,
        'wrlist' => $wrsearch,
        'telist' => $tesearch,
        'klist' => $ksearch
      ]);
    }

    public function delete($id)
    {
      $player = DB::table('fantasyroster')
      ->where('player_id','=',$id)
      ->delete();
      return redirect('/profile/fantasyteam');
    }

    public function final(Request $request)
    {
      $id = Auth::id();

      $data = $request->validate([
        'qb' => 'required',
        'rb1' => 'required',
        'rb2' => 'required',
        'wr1' => 'required',
        'wr2' => 'required',
        'wr3' => 'required',
        'te' => 'required',
        'kicker' => 'required'
      ]);

      if($data['rb1'] == $data['rb2']
      || $data['wr1'] == $data['wr2']
      || $data['wr1'] == $data['wr3']
      || $data['wr2'] == $data['wr3'])
      {
        $request->session()->flash('alert-danger', 'Cannot insert multiple instances of the same player');
        return Redirect::to('/profile/fantasyteam');
      }

      $formData = $data;

      $search = DB::table('fantasyroster')
      ->join('players', 'players.player_id', '=', 'fantasyroster.player_id')
      ->join('nfl_team', 'nfl_team.team_id', '=', 'players.team_id')
      ->where('user_id', '=', $id);
      $points = DB::table('player_stats');

      $formQB = (clone $search)->where('players.player_id', '=', $formData['qb'])->get();
      $qbpoints = (clone $points)->where('player_stats.player_id', '=', $formData['qb'])->get();
      $formRB1 = (clone $search)->where('players.player_id', '=', $formData['rb1'])->get();
      $rb1points = (clone $points)->where('player_stats.player_id', '=', $formData['rb1'])->get();
      $formRB2 = (clone $search)->where('players.player_id', '=', $formData['rb2'])->get();
      $rb2points = (clone $points)->where('player_stats.player_id', '=', $formData['rb2'])->get();
      $formWR1 = (clone $search)->where('players.player_id', '=', $formData['wr1'])->get();
      $wr1points = (clone $points)->where('player_stats.player_id', '=', $formData['wr1'])->get();
      $formWR2 = (clone $search)->where('players.player_id', '=', $formData['wr2'])->get();
      $wr2points = (clone $points)->where('player_stats.player_id', '=', $formData['wr2'])->get();
      $formWR3 = (clone $search)->where('players.player_id', '=', $formData['wr3'])->get();
      $wr3points = (clone $points)->where('player_stats.player_id', '=', $formData['wr3'])->get();
      $formTE = (clone $search)->where('players.player_id', '=', $formData['te'])->get();
      $tepoints = (clone $points)->where('player_stats.player_id', '=', $formData['te'])->get();
      $formK = (clone $search)->where('players.player_id', '=', $formData['kicker'])->get();
      $kpoints = (clone $points)->where('player_stats.player_id', '=', $formData['kicker'])->get();

      return view('/fantasyfinal',
      [
        'qb' => $formQB,
        'rb1' => $formRB1,
        'rb2' => $formRB2,
        'wr1' => $formWR1,
        'wr2' => $formWR2,
        'wr3' => $formWR3,
        'te' => $formTE,
        'k' => $formK,
        'qbpoints' => $qbpoints,
        'rb1points' => $rb1points,
        'rb2points' => $rb2points,
        'wr1points' => $wr1points,
        'wr2points' => $wr2points,
        'wr3points' => $wr3points,
        'tepoints' => $tepoints,
        'kpoints' => $kpoints
      ]);
    }
}
