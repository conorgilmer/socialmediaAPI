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
           <h3>Certificates</h3>
        </div>
      </div><!-- /.row -->
      
      <div class="row text-center">

        <div class="col-lg-4 col-md-6 hero-feature">
          <div class="thumbnail">
<a title="Inbound" href="http://academy.hubspot.com/certification">
<img class="" src="http://api.hubapi.com/academy/v1/badge-image/2AE77CDECB664D3FAEE9557ABDA16340" width="329" height="134" /></a>
            <div class="caption">
              <h3>HubSpot Inbound</h3>
              <p> <a href="https://www.hubspot.com" class="btn btn-primary">HubSpot</a></p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 hero-feature">
          <div class="thumbnail">
<a href="http://academy.hubspot.com/certification">
<img class="" src="http://api.hubapi.com/academy/v1/badge-image/c59bceb3a6e946f3b223d35c9a46bf18" width="329" height="134" /></a>
            <div class="caption">
              <h3>Email Marketing</h3>
              <p><a href="https://www.hubspot.com" class="btn btn-primary">HubSpot</a></p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 hero-feature">
          <div class="thumbnail">
<a title="Content Marketing" href="http://academy.hubspot.com/certification">
<img class="" src="http://api.hubapi.com/academy/v1/badge-image/89AF1220A21F4FBA815A1226E7CC3B1B" width="329" height="134" /></a>
            <div class="caption">
              <h3>Content Marketing</h3>
              <p><a href="https://www.hubspot.com" class="btn btn-primary">HubSpot</a></p>
            </div>
          </div>
        </div>


      </div><!-- /.row -->
      <!--row end-->
      
      
      
      
      
             <div class="row text-center">

<p> IN Private secton</p>
      </div><!-- /.row -->
     <?php include('footer.php'); ?>
