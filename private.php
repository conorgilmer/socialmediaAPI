<?php include('header.php');

//require('twitteroauth.php');
define("APPLICATION_PATH", ".");
require ( APPLICATION_PATH . "/includes/app_tokens_twitter.inc.php");



if (!isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] != 1)
{
  header("Location: index.php");
}

 if( isset($_GET['youare']) )
        {
            $youare = $_GET['youare'];
          } else {$youare = "you";};



//session_start();
 ?>

<div class="container">

        <!--div class="jumbotron hero-spacer">
        <h1>My Web presences!</h1>
        <p>A composite website showing my social media accounts!</p>
      </div>
      
      <hr-->
      
       <div class="row">
        <div class="col-lg-12">
           <h3>Private </h3>
           <p> Welcome  <?php if ( isset($_SESSION['route']))
        { echo $_SESSION["youare"]; } ?>  you logged in via <?php 
           if ( isset($_SESSION['route']))
        { echo $_SESSION["route"]; 
	  //echo " you are a " . $_SESSION["gender"];
	} ?> </p>
      
        </div>
      </div><!-- /.row -->
          
      <!--row-->
        
      <div class="row">
        <div class="col-lg-12">
           <h3>Social Media Stuff for</h3>
        </div>
      </div><!-- /.row -->
      
      <div class="row text-center">

        <div class="col-lg-4 col-md-6 hero-feature">
          <div class="thumbnail">
            <img src="cafelibreimages/cafelogo.png" alt="">
            <div class="caption">
              <h3>Cafe Libre</h3>
              <p>Social media presence of Cafe Libre.</p>
              <p> <a href="cafelibre.php" class="btn btn-primary">Cafe Libre Page</a></p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 hero-feature">
          <div class="thumbnail">
            <img src="twitterlogo.png" alt="">
            <div class="caption">
              <h3>My Twitter Presence</h3>
              <p>Tweets tags ans lists!</p>
              <p><a href="twitter.php" class="btn btn-primary">My Twitter</a></p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 hero-feature">
          <div class="thumbnail">
            <img src="facebooklogo.png" alt="">
            <div class="caption">
              <h3>Facebook</h3>
              <p>Some Facebook widgets</p>
              <p><a href="facebook.php" class="btn btn-primary">Facebook</a></p>
            </div>
          </div>
        </div>


      </div><!-- /.row -->
      <!--row end-->
      
      
      
      
      
             <div class="row text-center">

<p> IN Private secton</p>
      </div><!-- /.row -->
     <?php include('footer.php'); ?>
