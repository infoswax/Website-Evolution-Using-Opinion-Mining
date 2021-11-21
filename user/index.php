<!DOCTYPE html>
<html lang="en">
    <head>
        <title>User View</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="../js/parallax.min.js"></script>


        <style>
            .parallax-window {
            margin-top: -10px;
            min-height: 600px;
            background: transparent;
            }
            /* .body-cont{
                margin-right : 30px;
                margin-left : 30px;
            } */
            /* Remove the navbar's default margin-bottom and rounded borders */
            .navbar {
                margin-bottom: 0;
                border-radius: 0;
            }

            /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
            /* .row.content {height: 450px} */

            /* Set gray background color and 100% height */
            /* .sidenav {
                padding-top: 20px;
                background-color: #f1f1f1;
                height: 100%;
            } */

            /* Set black background color, white text and some padding */
            /* footer {
                background-color: #555;
                color: white;
                padding: 15px;
            } */

            /* On small screens, set height to 'auto' for sidenav and grid */
            @media screen and (max-width: 767px) {
                .sidenav {
                    height: auto;
                    padding: 15px;
                }
                .row.content {height:auto;}
            }
            .infos {
            z-index: 10;
            position: relative;
            text-align: center;
            padding-top: 300px;



        }

        .infos>h1 {
            z-index: 10;
            color: white;
            background: rgba(54, 25, 25, .6);
            border: 3px solid whitesmoke;


            display: inline;
            padding: 10px;
            font-size: 50px;


        }

        .sec {
            padding: 15px;
            z-index: 5;
            font-family: sans-serif;
            font-size: 2em;
            border: 2px solid black;
            text-align: center;
            font-variant-caps: all-petite-caps;
        }

        .secdark {
            padding: 15px;
            color: white;
            background-color: rgb(42, 48, 48);
            font-family: sans-serif;

            font-size: 3em;
            border: 2px solid white;
            text-align: center;
            font-variant-caps: all-petite-caps;
        }
		/* Set black background color, white text and some padding */
		footer {
		  background-color: #555;
		  color: white;
		  padding: 15px;
		}
        </style>
    </head>
    <body>
        <nav class='navbar navbar-inverse right'>
<div class='container-fluid'>
  <div class='navbar-header'>
    <button type='button' class='navbar-toggle' data-toggle='collapse' data-target='#myNavbar'>
      <span class='icon-bar'></span>
      <span class='icon-bar'></span>
      <span class='icon-bar'></span>                        
    </button>
    <a class='navbar-brand' href='#'>Website Evaluator</a>
  </div>
  <div class='collapse navbar-collapse' id='myNavbar'>
    <ul class='nav navbar-nav'>
      <li class='active'><a href='index.php'>Home</a></li>
      <li><a href='addwebsite.php'>Add Websites</a></li>
      <li><a href='rateit.php'>Rate It</a></li>
      <li><a href='searchengine.php'>Search Engine</a></li>
      <li><a href='feedback.php'>Feedback</a></li>
    </ul>
    <ul class='nav navbar-nav navbar-right'>
      
      <li class = 'btn-danger'><a href='logout.php'><span class='glyphicon glyphicon-log-in'></span> Logout</a></li>
    </ul>
  </div>
</div>
</nav>

        <div class="">
        <div class="parallax-window" data-parallax="scroll" data-z-index='0' data-image-src="../img/bg000.jpg" data-bleed="10">
            <div class="infos">
                <h1>WELCOME TO WEBSITE EVALUATION</h1>
            </div>
        </div>
        </div>
	<footer class="container-fluid text-center">
  <p>&copy; All Rights Reserved.</p>
</footer>


    </body>
</html>
