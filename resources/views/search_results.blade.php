<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Search Results | NFL Player Database</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
</head>
<body>
	<ol class="breadcrumb">
		<li class="breadcrumb-item"><a href="/welcome">Home</a></li>
		<li class="breadcrumb-item"><a href="/search_players">Search</a></li>
		<li class="breadcrumb-item active">Results</li>
		@if(Auth::check())
		<li class="breadcrumb-item"><a href="/profile">My Profile</a></li>
		<li class="breadcrumb-item"><a href="/profile/fantasyteam">My Fantasy Team</a></li>
		@endif
	</ol>
<div class="background-div">
	<div class="container-fluid">
		<div class="row">
			<h1 class="col-12 mt-4">NFL Player Search Results</h1>
		</div> <!-- .row -->
	</div> <!-- .container-fluid -->

	<div class="container-fluid">

		<div class="row mb-4 mt-4">
			<div class="col-12">
				<a href="/search_players" role="button" class="btn btn-primary">Back to Search Form</a>
			</div> <!-- .col -->
		</div> <!-- .row -->

		<div class="row">

						<table class="table table-hover table-responsive mt-4">
							<thead>
								<tr>
									<th>Name</th>
									<th>Age</th>
									<th>Team</th>
									<th>College</th>
									<th>Position</th>
								</tr>
							</thead>
							<tbody>
              @foreach ($search as $result)
              	<tr>
              		<td><a href="/player-details/{{$result->player_id}}">{{$result->FName}} {{$result->LName}}</a></td>
              		<td>{{$result->age}}</td>
              		<td>{{$result->team_name}}</td>
              		<td>{{$result->college_name}}</td>
              		<td>{{$result->position_name}}</td>
              	</tr>
              @endforeach
						</tbody>
					</table>
				</div> <!-- .col -->
	</div> <!-- .row -->

	<div class="row mt-4 mb-4">
		<div class="col-12">
			<a href="/search_players" role="button" class="btn btn-primary">Back to Search Form</a>
		</div> <!-- .col -->
	</div> <!-- .row -->
	<div class="top-buffer"></div>
</div> <!-- .container-fluid -->
</div> <!--background-div-->
</body>
</html>
