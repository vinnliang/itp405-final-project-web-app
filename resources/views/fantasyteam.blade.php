<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Build My Fantasy Team</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
	<style>
	.form-check-label {
		padding-top: calc(.5rem - 1px * 2);
		padding-bottom: calc(.5rem - 1px * 2);
		margin-bottom: 0;
	}
</style>
</head>
<body>

  <ol class="breadcrumb">
  	<li class="breadcrumb-item"><a href="/welcome">Home</a></li>
  	<li class="breadcrumb-item"><a href="/search_players">Search</a></li>
    <li class="breadcrumb-item active">Fantasy Team Builder</li>
  </ol>

  <div class="background-div"-->

    <div class="container">
  		<div class="row">
  			<h1 class="col-12 mt-5 mb-5">My Fantasy Football Team Editor</h1>
  		</div> <!-- .row -->
  	</div> <!-- .container -->

    <div class="container">
      <div class="row">
        <h2>Current Fantasy Roster</h2>
      </div>
      <table class="table table-hover table-responsive mt-4">
        <thead>
          <tr>
            <th>Name</th>
            <th>Position</th>
            <th>Team</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($playerlist as $player)
          <tr>
            <td>{{$player->FName}} {{$player->LName}}</td>
            <td>{{$player->position_name}}</td>
            <td>{{$player->team_name}}</td>
            <td><a href="/profile/fantasyteam/{{$player->player_id}}/delete"class="btn btn-danger" role = "button">Delete</a></td>
          </tr>
            @endforeach
        </tbody>
      </table>
    </div>
  </br><hr></br>
    <div class="container">
    <form action="/profile/fantasyteam/fantasyfinal" method="GET">
      <div class="form-group row">
        <label for="qb-id" class="col-sm-3 col-form-label text-sm-right">Quarterback:</label>
        <div class="col-sm-9">
          <select name="qb" id="qb-id" class="form-control">
            <option value="" selected>-- All --</option>
            @foreach ($qblist as $qb)
            <option value="{{$qb->player_id}}">{{$qb->FName}} {{$qb->LName}} -------- {{$qb->team_name}}</option>
            @endforeach
          </select>
        </div>
      </div> <!-- .form-group -->

      <div class="form-group row">
        <label for="rb1-id" class="col-sm-3 col-form-label text-sm-right">Running Back 1:</label>
        <div class="col-sm-9">
          <select name="rb1" id="rb1-id" class="form-control">
            <option value="" selected>-- All --</option>
            @foreach ($rblist as $rb)
            <option value="{{$rb->player_id}}">{{$rb->FName}} {{$rb->LName}} -------- {{$rb->team_name}}</option>
            @endforeach
          </select>
        </div>
      </div> <!-- .form-group -->

      <div class="form-group row">
        <label for="rb2-id" class="col-sm-3 col-form-label text-sm-right">Running Back 2:</label>
        <div class="col-sm-9">
          <select name="rb2" id="rb2-id" class="form-control">
            <option value="" selected>-- All --</option>
            @foreach ($rblist as $rb)
            <option value="{{$rb->player_id}}">{{$rb->FName}} {{$rb->LName}} -------- {{$rb->team_name}}</option>
            @endforeach
          </select>
        </div>
      </div> <!-- .form-group -->

      <div class="form-group row">
        <label for="wr1-id" class="col-sm-3 col-form-label text-sm-right">Wide Receiver 1:</label>
        <div class="col-sm-9">
          <select name="wr1" id="wr1-id" class="form-control">
            <option value="" selected>-- All --</option>
            @foreach ($wrlist as $wr)
            <option value="{{$wr->player_id}}">{{$wr->FName}} {{$wr->LName}} -------- {{$wr->team_name}}</option>
            @endforeach
          </select>
        </div>
      </div> <!-- .form-group -->

      <div class="form-group row">
        <label for="wr2-id" class="col-sm-3 col-form-label text-sm-right">Wide Receiver 2:</label>
        <div class="col-sm-9">
          <select name="wr2" id="wr2-id" class="form-control">
            <option value="" selected>-- All --</option>
            @foreach ($wrlist as $wr)
            <option value="{{$wr->player_id}}">{{$wr->FName}} {{$wr->LName}} -------- {{$wr->team_name}}</option>
            @endforeach
          </select>
        </div>
      </div> <!-- .form-group -->

      <div class="form-group row">
        <label for="wr3-id" class="col-sm-3 col-form-label text-sm-right">Wide Receiver 3:</label>
        <div class="col-sm-9">
          <select name="wr3" id="wr3-id" class="form-control">
            <option value="" selected>-- All --</option>
            @foreach ($wrlist as $wr)
            <option value="{{$wr->player_id}}">{{$wr->FName}} {{$wr->LName}} -------- {{$wr->team_name}}</option>
            @endforeach
          </select>
        </div>
      </div> <!-- .form-group -->

      <div class="form-group row">
        <label for="te-id" class="col-sm-3 col-form-label text-sm-right">Tight End:</label>
        <div class="col-sm-9">
          <select name="te" id="te-id" class="form-control">
            <option value="" selected>-- All --</option>
            @foreach ($telist as $te)
            <option value="{{$te->player_id}}">{{$te->FName}} {{$te->LName}} -------- {{$te->team_name}}</option>
            @endforeach
          </select>
        </div>
      </div> <!-- .form-group -->

      <div class="form-group row">
        <label for="kicker-id" class="col-sm-3 col-form-label text-sm-right">Kicker:</label>
        <div class="col-sm-9">
          <select name="kicker" id="kicker-id" class="form-control">
            <option value="" selected>-- All --</option>
            @foreach ($klist as $kicker)
            <option value="{{$kicker->player_id}}">{{$kicker->FName}} {{$kicker->LName}} -------- {{$kicker->team_name}}</option>
            @endforeach
          </select>
        </div>
      </div> <!-- .form-group -->
      <div class="container">
        <div class="col-12 mt-4 mb-4 text-center">

    				<button class="btn btn-success">Submit my Fantasy lineup</button><div class="col-12 mt-4 mb-4"></div>

        </div>
      </div>
    </form>
    </div><!--container-->


  </div><!--background-div-->
</body>
</html>
