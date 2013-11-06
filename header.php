<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Cafe Libre and Social Media Presence</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom CSS for the 'Heroic Features' Template -->
    <link href="css/heroic-features.css" rel="stylesheet">
  </head>

  <body>

    <nav class="navbar navbar-fixed-top navbar-inverse" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Home</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav">
            <li><a href="about.php">About</a></li>
            
            <li><a href="cafelibre.php">Cafe Libre</a></li>
          
    <?php
           
session_start();

if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] == 1)
{ //$typelogin = $_SESSION['loggedInAs'];
  //log("in isset in header");
          echo ("<li><a href=\"facebook.php\">Facebook</a></li>
            <li><a href=\"google.php\">Google +</a></li>
            <li><a href=\"twitter.php\">Twitter</a></li>
            <li><a href=\"youtube.php\">YouTube</a></li>
            
<li><a href=\"logout.php\">Logout</a></li>");
//<li><a href=\"#\">You're logged in using". $typelogin."</a></li>");
} else {
            
echo ("<li><a href=\"index.php\">Login</a></li>");
}
         ?>   
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container -->
    </nav>
    
    