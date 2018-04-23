<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Welcome</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">
        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
      <div class="parallax">
      <div class="background-div">
      	<div class="container">
      		<div class="row">
      			<h1 class="col-12 mt-4 mb-4 text-center">Welcome to the NFL Fantasy Player Database</h1>
      		</div> <!-- .row -->
      	</div> <!-- .container -->
        <hr>
      @if(Auth::check())
        <div class="container">
          <div class="row">
            <div class="col-md-4"></div>
              <h2 class="col-12 mt-4 mb-4 text-center">Welcome Back, {{$user->name}}</h2>
              <div class="col-md-4"></div>
              <div class="col-md-4 text-center">
                <a href="/profile/fantasyteam" class="btn btn-success btn-lg btn-block" role="button">Access your fantasy team</a>
              </div>
          </div><!--row--></br></br>
          <div class="row">
            <div class="col-md-4"></div>
            <h4 class="col-12 text-center">Not {{$user->name}}?<a href="/logout"> Logout here</a></h4>
          </div><!--row-->
        </div><!--container-->
      @else
        <div class="container">
          <div class="row">
            <div class="col-md-4"></div>
              <h2 class="col-12 mt-4 mb-4 text-center">Login and start building your fantasy team</h2>
              <div class="col-md-4"></div>
              <div class="col-md-4 text-center">
                <a href="/login" class="btn btn-success btn-lg btn-block" role="button">Login</a>
              </div>
            </div>
          </div><!--row-->
        </div><!--container-->
      @endif
      </br></br><hr>

      <div class="container">
        <div class="row">
          <div class="col-12 mt-4 mb-4 text-center"><h2>Search our database of players</h2></div>
        </div>
      </div>

      	<div class="container">
      		<div class="row">
      				<div class="col-md-4"></div>
      				<div class="col-md-4 text-center">
      					<a href="/search_players" class="btn btn-primary btn-lg btn-block mt-4 mt-md-2" role="button">Search for Players</a>
      				</div>
      			<div class = "col-12 top-buffer">
      				<h2 class="col-12 mt-4 mb-4 text-center">Or click a team logo to see all players from that team</h2>
      			</div>
      		</div> <!-- .row -->
      	</div> <!-- .container -->

      	<div class="container">
      		<div class="top-block"></div>
      		<div class="row">
      			<div class="col-md-3">
      				<a href="/search_results?first_name=&last_name=&team=1&college=&position="
              target="_blank"><img src="https://www.seeklogo.net/wp-content/uploads/2014/12/Arizona-Cardinals-logo-vector.jpg" style="height:250px;" alt="Arizona Cardinals logo vector" /></a>
      			</div>
      			<div class="col-md-3">
      				<a href="/search_results?first_name=&last_name=&team=2&college=&position="
              target="_blank"><img src="https://www.seeklogo.net/wp-content/uploads/2012/12/atlanta-falcons-logo-vector-400x400.png" style = "height:250px;" alt="Atlanta Falcons logo vector free" /></a>
      			</div>
      			<div class="col-md-3">
      				<a href="/search_resultsfirst_name=&last_name=&team=3&college=&position="
              target="_blank"><img src="https://www.seeklogo.net/wp-content/uploads/2012/05/baltimore-ravens-logo-vector-01.png" style="height:250px;"  alt="Baltimore Ravens logo vector free" /></a>
      			</div>
      			<div class="col-md-3">
      				<a href="/search_results?first_name=&last_name=&team=4&college=&position="
              target="_blank"><img src="https://www.seeklogo.net/wp-content/uploads/2012/05/buffalo-bills-logo-vector-01.png" style="height:250px;"  alt="Buffalo Bills logo vector" /></a>
      			</div>
      		</div>
      		<div class="row">
      			<div class="col-md-3">
      				<a href="/search_results?first_name=&last_name=&team=5&college=&position="
              target="_blank"><img src="https://www.seeklogo.net/wp-content/uploads/2012/11/carolina-panthers-logo-vector-400x400.png" style="height:250px;" alt="Carolina Panthers logo vector" /></a>
      			</div>
      			<div class="col-md-3">
      				<a href="/search_results?first_name=&last_name=&team=6&college=&position="
              target="_blank"><img src="https://www.seeklogo.net/wp-content/uploads/2011/05/chicago-bears-logo-vector-400x400.png" style="height:250px;" alt="Chicago Bears logo vector free download" /></a>
      			</div>
      			<div class="col-md-3">
      				<a href="/search_results?first_name=&last_name=&team=7&college=&position="
              target="_blank"><img src="https://www.seeklogo.net/wp-content/uploads/2012/05/cincinnati-bengals-logo-vector-01.png" style="height:250px;" alt="Cincinnati Bengals logo vector free" /></a>
      			</div>
      			<div class="col-md-3">
      				<a href="/search_results?first_name=&last_name=&team=8&college=&position="
              target="_blank"><img src="https://www.seeklogo.net/wp-content/uploads/2015/08/cleveland-browns-logo-vector-download-400x400.jpg" style="height:250px;" alt="Cleveland Browns logo vector" /></a>
      			</div>
      		</div>
      		<div class="row">
      			<div class="col-md-3">
      				<a href="/search_results?first_name=&last_name=&team=9&college=&position="
              target="_blank"><img src="https://www.seeklogo.net/wp-content/uploads/2011/05/dallas-cowboys-logo-vector-400x400.png" style="height:250px;" alt="Dallas Cowboys logo vector free download" /></a>
      			</div>
      			<div class="col-md-3">
      				<a href="/search_results?first_name=&last_name=&team=10&college=&position="
              target="_blank"><img src="https://www.seeklogo.net/wp-content/uploads/2012/10/denver-broncos-logo-vector-400x400.png" style="height:250px;" alt="Denver Broncos logo vector" /></a>
      			</div>
      			<div class="col-md-3">
      				<a href="/search_results?first_name=&last_name=&team=11&college=&position="
              target="_blank"><img src="https://www.seeklogo.net/wp-content/uploads/2012/09/detroit-lions-logo-vector-01-400x400.png" style="height:250px;" alt="Detroit Lions logo vector download free" /></a>
      			</div>
      			<div class="col-md-3">
      				<a href="/search_results?first_name=&last_name=&team=12&college=&position="
              target="_blank"><img src="https://www.seeklogo.net/wp-content/uploads/2012/12/green-bay-packers-logo-vector-400x400.png" style="height:250px;" alt="Green Bay Packers logo vector free" /></a>
      			</div>
      		</div>
      		<div class="row">
      			<div class="col-md-3">
      				<a href="/search_results?first_name=&last_name=&team=13&college=&position="
              target="_blank"><img src="https://www.seeklogo.net/wp-content/uploads/2012/11/houston-texans-logo-vector-400x400.png" style="height:250px;" alt="Houston Texans logo vector free download" /></a>
      			</div>
      			<div class="col-md-3">
      				<a href="/search_results?first_name=&last_name=&team=14&college=&position="
              target="_blank"><img src="https://www.seeklogo.net/wp-content/uploads/2015/08/indianapolis-colts-logo-vector-download-400x400.jpg" style="height:250px;" alt="Indianapolis Colts logo vector" /></a>
      			</div>
      			<div class="col-md-3">
      				<a href="/search_results?first_name=&last_name=&team=15&college=&position="
              target="_blank"><img src="https://www.seeklogo.net/wp-content/uploads/2015/08/jacksonville-jaguars-logo-vector-download-400x400.jpg" style="height:250px;" alt="Jacksonville Jaguars logo vector" /></a>
      			</div>
      			<div class="col-md-3">
      				<a href="/search_results?first_name=&last_name=&team=16&college=&position="
              target="_blank"><img src="https://www.seeklogo.net/wp-content/uploads/2015/08/kansas-city-chiefs-logo-vector-download-400x400.jpg" style="height:250px;"  alt="Kansas City Chiefs logo vector" /></a>
      			</div>
      		</div>
      		<div class="row">
      			<div class="col-md-3">
      				<a href="/search_results?first_name=&last_name=&team=17&college=&position="
              target="_blank"><img src="https://www.seeklogo.net/wp-content/uploads/2012/10/san-diego-chargers-logo-vector-400x400.png" style="height:250px;" alt="San Diego Chargers logo vector free" /></a>
      			</div>
      			<div class="col-md-3">
      				<a href="/search_results?first_name=&last_name=&team=18&college=&position="
              target="_blank"><img src="https://www.seeklogo.net/wp-content/uploads/2015/08/st-louis-rams-vector-logo-400x400.png" style="height:250px;" alt="St. Louis Rams vector logo (.svg + .eps)" /></a>
      			</div>
      			<div class="col-md-3">
      				<a href="/search_results?first_name=&last_name=&team=19&college=&position="
              target="_blank"><img src="https://www.seeklogo.net/wp-content/uploads/2015/08/miami-dolphins-vector-logo-400x400.png" style="height:250px;" alt="New Miami Dolphins vector logo (.eps)" /></a>
      			</div>
      			<div class="col-md-3">
      				<a href="/search_results?first_name=&last_name=&team=20&college=&position="
              target="_blank"><img src="https://www.seeklogo.net/wp-content/uploads/2012/10/minnesota-vikings-logo-vector-400x400.png" style="height:250px;" alt="Minnesota Vikings logo vector" /></a>
      			</div>
      		</div>
      		<div class="row">
      			<div class="col-md-3">
      				<a href="/search_results?first_name=&last_name=&team=21&college=&position="
              target="_blank"><img src="https://www.seeklogo.net/wp-content/uploads/2014/10/new-england-patriots-logo-preview-400x400.png" style="height:250px;" alt="New England Patriots logo vector" /></a>
      			</div>
      			<div class="col-md-3">
      				<a href="/search_results?first_name=&last_name=&team=22&college=&position="
              target="_blank"><img src="https://www.seeklogo.net/wp-content/uploads/2012/12/new-orleans-saints-logo-vector-400x400.png" style="height:250px;" alt="New Orleans Saints logo vector free" /></a>
      			</div>
      			<div class="col-md-3">
      				<a href="/search_results?first_name=&last_name=&team=23&college=&position="
              target="_blank"><img src="https://www.seeklogo.net/wp-content/uploads/2011/05/new-york-giants-logo-vector-400x400.png" style="height:250px;" alt="New York Giants logo vector download free" /></a>
      			</div>
      			<div class="col-md-3">
      				<a href="/search_results?first_name=&last_name=&team=24&college=&position="
              target="_blank"><img src="https://www.seeklogo.net/wp-content/uploads/2011/05/new-york-jets-logo-vector-01.png" style="height:250px;" alt="New York Jets logo vector free download" /></a>
      			</div>
      		</div>
      		<div class="row">
      			<div class="col-md-3">
      				<a href="/search_results?first_name=&last_name=&team=25&college=&position="
              target="_blank"><img src="https://www.seeklogo.net/wp-content/uploads/2012/10/oakland-raiders-logo-vector-400x400.png" style="height:250px;" alt="Oakland Raiders logo vector" /></a>
      			</div>
      			<div class="col-md-3">
      				<a href="/search_results?first_name=&last_name=&team=26&college=&position="
              target="_blank"><img src="https://www.seeklogo.net/wp-content/uploads/2014/10/philadelphia-eagles-logo-400x400.png" style="height:250px;" alt="Philadelphia Eagles logo vector" /></a>
      			</div>
      			<div class="col-md-3">
      				<a href="/search_results?first_name=&last_name=&team=27&college=&position="
              target="_blank"><img src="https://www.seeklogo.net/wp-content/uploads/2011/05/pittsburgh-steelers-logo-vector-01.png" style="height:250px;" alt="Pittsburgh Steelers logo vector free download" /></a>
      			</div>
      			<div class="col-md-3">
      				<a href="/search_results?first_name=&last_name=&team=28&college=&position="
              target="_blank"><img src="https://www.seeklogo.net/wp-content/uploads/2011/06/san-francisco-49ers-logo-vector-400x400.png" style="height:250px;" alt="San Francisco 49ers logo vector free" /></a>
      			</div>
      		</div>
      		<div class="row">
      			<div class="col-md-3">
      				<a href="/search_results?first_name=&last_name=&team=29&college=&position="
              target="_blank"><img src="https://www.seeklogo.net/wp-content/uploads/2012/10/seattle-seahawks-logo-vector-400x400.png" style="height:250px;" alt="Seattle Seahawks logo vector free download" /></a>
      			</div>
      			<div class="col-md-3">
      				<a href="/search_results?first_name=&last_name=&team=30&college=&position="
              target="_blank"><img src="https://www.seeklogo.net/wp-content/uploads/2012/12/tampa-bay-buccaneers-logo-vector-400x400.png" style="height:250px;" alt="Tampa Bay Buccaneers logo vector" /></a>
      			</div>
      			<div class="col-md-3">
      				<a href="/search_results?first_name=&last_name=&team=31&college=&position="
              target="_blank"><img src="https://www.seeklogo.net/wp-content/uploads/2015/08/tennessee-titans-logo-vector-download-400x400.jpg" style="height:250px;" alt="Tennessee Titans logo vector" /></a>
      			</div>
      			<div class="col-md-3">
      				<a href="/search_results?first_name=&last_name=&team=32&college=&position="
              target="_blank"><img src="https://www.seeklogo.net/wp-content/uploads/2011/05/washington-redskins-logo-vector-400x400.png" style="height:250px;" alt="Washington Redskins logo vector free download" /></a>
      			</div>
      		</div><!--container-->
      	</div><!--background-div-->
      </div><!--parallax-->
    </body>
</html>
