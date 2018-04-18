<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>My Fantasy Team</title>
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
    <li class="breadcrumb-item"><a href="/profile/fantasyteam">Build My Fantasy Roster</a></li>
    <li class="breadcrumb-item active">Fantasy Team Lineup</li>
  </ol>

  <div class="background-div"-->

    <div class="container">
  		<div class="row">
  			<h1 class="col-12 mt-5 mb-5">My Fantasy Football Final Lineup</h1>
  		</div> <!-- .row -->
  	</div> <!-- .container -->

    <div class="container">
      <div class="row">
        <table class="table table-hover table-responsive mt-4">
          <thead>
            <tr>
              <th>Position</th>
              <th>Name</th>
              <th>Team</th>
              <th>Fantasy Points</th>
            </tr>
          </thead>
          <tbody>
            @foreach($qb as $QB)
            <tr>
              <td>QB</td>
              <td>{{$QB->FName}} {{$QB->LName}}</td>
              <td>{{$QB->team_name}}</td>
            @endforeach
            @foreach($qbpoints as $qbpoint)
              <td>{{$qbpoint->FantPt}}</td>
            @endforeach
            </tr>
            @foreach($rb1 as $RB1)
            <tr>
              <td>RB1</td>
              <td>{{$RB1->FName}} {{$RB1->LName}}</td>
              <td>{{$RB1->team_name}}</td>
            @endforeach
            @foreach($rb1points as $rb1point)
              <td>{{$rb1point->FantPt}}</td>
            @endforeach
            </tr>
            @foreach($rb2 as $RB2)
            <tr>
              <td>RB2</td>
              <td>{{$RB2->FName}} {{$RB2->LName}}</td>
              <td>{{$RB2->team_name}}</td>
            @endforeach
            @foreach($rb2points as $rb2point)
              <td>{{$rb2point->FantPt}}</td>
            @endforeach
            </tr>
            @foreach($wr1 as $WR1)
            <tr>
              <td>WR1</td>
              <td>{{$WR1->FName}} {{$WR1->LName}}</td>
              <td>{{$WR1->team_name}}</td>
            @endforeach
            @foreach($wr1points as $wr1point)
              <td>{{$wr1point->FantPt}}</td>
            @endforeach
            </tr>
            @foreach($wr2 as $WR2)
            <tr>
              <td>WR2</td>
              <td>{{$WR2->FName}} {{$WR2->LName}}</td>
              <td>{{$WR2->team_name}}</td>
            @endforeach
              @foreach($wr2points as $wr2point)
                <td>{{$wr2point->FantPt}}</td>
              @endforeach
            </tr>
            @foreach($wr3 as $WR3)
            <tr>
              <td>WR3</td>
              <td>{{$WR3->FName}} {{$WR3->LName}}</td>
              <td>{{$WR3->team_name}}</td>
            @endforeach
              @foreach($wr3points as $wr3point)
                <td>{{$wr3point->FantPt}}</td>
              @endforeach
            </tr>
            @foreach($te as $TE)
            <tr>
              <td>TE</td>
              <td>{{$TE->FName}} {{$TE->LName}}</td>
              <td>{{$TE->team_name}}</td>
            @endforeach
              @foreach($tepoints as $tepoint)
                <td>{{$tepoint->FantPt}}</td>
              @endforeach
            </tr>
            @foreach($k as $K)
            <tr>
              <td>K</td>
              <td>{{$K->FName}} {{$K->LName}}</td>
              <td>{{$K->team_name}}</td>
            @endforeach
            @foreach($kpoints as $kpoint)
              <td>{{$kpoint->FantPt}}</td>
            @endforeach
            </tr>
          </tbody>
        </table>
        <div class="container">
          <hr>
          <div class="d-flex justify-content-around">
            <div class="p2">
              <h2>
              Total fantasy points:
              <?php echo ($qbpoint->FantPt)
                       + ($rb1point->FantPt)
                       + ($rb2point->FantPt)
                       + ($wr1point->FantPt)
                       + ($wr2point->FantPt)
                       + ($wr3point->FantPt)
                       + ($tepoint->FantPt)
                       + ($kpoint->FantPt)
              ?>
              </h2>
            </div>
          </div>
        </div>
      </div>
    </div><!--container-->




  </div><!--background-div-->
</body>
</html>
