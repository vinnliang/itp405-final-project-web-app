<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Search | NFL Players Database</title>
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
		<li class="breadcrumb-item active">Search</li>
		@if(Auth::check())
		<li class="breadcrumb-item"><a href="/profile">My Profile</a></li>
		<li class="breadcrumb-item"><a href="/profile/fantasyteam">My Fantasy Team</a></li>
		@endif
	</ol>
<div class="background-div"-->
	<div class="container">
		<div class="row">
			<h1 class="col-12 mt-4 mb-4">Search the NFL Player database</h1>
		</div> <!-- .row -->
	</div> <!-- .container -->

	<div class="container">
				<form action="/search_results" method="GET">

					<div class="form-group row">
						<label for="first-name-id" class="col-sm-3 col-form-label text-sm-right">First Name:</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" id="first-name-id" name="first_name">
						</div>
					</div> <!-- .form-group -->

					<div class="form-group row">
						<label for="last-name-id" class="col-sm-3 col-form-label text-sm-right">Last Name:</label>
						<div class="col-sm-9">
							<input type="text" class="form-control" id="last-name-id" name="last_name">
						</div>
					</div> <!-- .form-group -->

					<div class="form-group row">
						<label for="team-id" class="col-sm-3 col-form-label text-sm-right">NFL Team:</label>
						<div class="col-sm-9">
							<select name="team" id="team-id" class="form-control">
								<option value="" selected>-- All --</option>
                @foreach ($teams as $team)
                  <option value="{{$team->team_id}}">{{$team->team_name}}</option>
                @endforeach
					</select>
				</div>
			</div> <!-- .form-group -->

			<div class="form-group row">
				<label for="college-id" class="col-sm-3 col-form-label text-sm-right">College:</label>
				<div class="col-sm-9">
					<select name="college" id="college-id" class="form-control">
						<option value="" selected>-- All --</option>
            @foreach ($colleges as $college)
              <option value="{{$college->college_id}}">{{$college->college_name}}</option>
            @endforeach
					</select>
					</div>
				</div> <!-- .form-group -->

				<div class="form-group row">
					<label for="position-id" class="col-sm-3 col-form-label text-sm-right">Position:</label>
					<div class="col-sm-9">
						<select name="position" id="position-id" class="form-control">
							<option value="" selected>-- All --</option>
              @foreach ($positions as $position)
                <option value="{{$position->position_id}}">{{$position->position_name}}</option>
              @endforeach
              </select>
						</div>
					</div> <!-- .form-group -->

				<div class="form-group row">
					<div class="col-sm-3"></div>
					<div class="col-sm-9 mt-2">
						<button type="submit" class="btn btn-primary">Search</button>
						<button type="reset" class="btn btn-light">Reset</button>
						<div class="top-buffer"></div>
					</div>
				</div> <!-- .form-group -->
			</form>
</div> <!-- .container -->
</div><!--background-div-->
</body>
</html>
