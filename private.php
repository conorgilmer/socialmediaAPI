<?php include('header.php');


if (!isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] != 1)
{
  header("Location: index.php");
}

 if( isset($_GET['youare']) )
        {
            $youare = $_GET['youare'];
          } else 
          $youare = "blah";



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
           <p> Welcome <?php echo $youare?> </p>
        </div>
      </div><!-- /.row -->
      
          
             <div class="row text-center">

<p> IN Private secton</p>
      </div><!-- /.row -->
     <?php include('footer.php'); ?>
