<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Player Details | NFL Player Database</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
	<link rel="stylesheet" href="style.css">
</head>
<body>

	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="/welcome">Home</a></li>
		<li class="breadcrumb-item"><a href="/search_players">Search</a></li>
		<li class="breadcrumb-item"><a href="{{URL::previous()}}">Results</a></li>
		<li class="breadcrumb-item active">Details</li>
		@if(Auth::check())
		<li class="breadcrumb-item"><a href="/profile">My Profile</a></li>
		<li class="breadcrumb-item"><a href="/profile/fantasyteam">My Fantasy Team</a></li>
		@endif
	</ol>

<div class="background-div">
	<div class="container">
		<div class="row">
			<h1 class="col-8 mt-4">Player Details</h1>

			   <!-- //if ( !isset($_GET['player_id']) || empty($_GET['player_id']) ) :
				//Missing playerID

				<div class="text-danger">Invalid Player ID.</div> -->

			<div class="col-4">

			</div>
		</div> <!-- .row -->
	</div> <!-- .container -->

	<div class="container">
		<div class="row mt-4">
			<div class="col-12">
	<table class="table">
		<tr>
			<th class="text-right">Name:</th>
			<td>{{$player->FName}} {{$player->LName}}</td>
		</tr>

		<tr>
			<th class="text-right">Age:</th>
			<td>{{$player->age}}</td>
		</tr>

		<tr>
			<th class="text-right">Team:</th>
			<td>{{$player->team_name}}</td>
		</tr>

		<tr>
			<th class="text-right">College:</th>
			<td>{{$player->college_name}}</td>
		</tr>

		<tr>
			<th class="text-right">Position:</th>
			<td>{{$player->position_name}}</td>
		</tr>

		<tr>
			<th class="text-right">NFL Experience:</th>
			<td>{{$player->nfl_experience}}</td>
		</tr>

		<tr>
			<th class="text-right">Practice Squad:</th>
			<td>{{$player->isPracticeSquad}}</td>
		</tr>

		<tr>
			<th class="text-right">Jersey Number:</th>
			<td>{{$player->jerseyNumber}}</td>
		</tr>
		</table>
			</div> <!-- .col -->
		</div> <!-- .row -->

		<div class="row mt-4 mb-4 text-center">
			<div class="col-12 mt-4 mb-4">
		@if(Auth::check())
			<form action="/player-details/{{$player->player_id}}" method="post">
				{{csrf_field()}}
				<input type="hidden" name="player" value="{{$player->player_id}}">
				<button type="submit" class="btn btn-success">Add to Fantasy Roster</button><div class="col-12 mt-4 mb-4"></div>
			</form>
		@endif
				<a href="{{URL::previous()}}" role="button" class="btn btn-primary">Back to Search Results</a>
					<div class=top-buffer></div>
			</div> <!-- .col -->
		</div> <!-- .row -->
	</div> <!-- .container -->
</div><!--background-div-->
</body>
</html>
