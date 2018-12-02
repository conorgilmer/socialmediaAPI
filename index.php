<?php include('headera.php'); ?>

<div class="container">

      <!--div class="jumbotron hero-spacer">
        <h1>My Web presences!</h1>
        <p>A composite website showing my social media accounts!</p>
      </div>
      
      <hr-->
      
      <div class="row">
        <div class="col-lg-12">
           <h3>Login to My Internet Presence</h3>
           <?php 
           if (isset($_GET['loginfail']))
            {echo $_GET['loginfail'];} 
           
           ?>
        </div>
      </div><!-- /.row -->
      
      <div class="row text-center">

        <div class="col-lg-3 col-md-6 hero-feature">
          <div class="thumbnail">
            <!--img src="http://placehold.it/800x500" alt=""-->
            <div class="caption">
              <h3>Native Login</h3>
              <p>Login Natively!</p>
              <p><a href="native_login.php" class="btn btn-primary">Native Login</a></p>
              
               <!--p>u: guest p: letmein</p-->
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 hero-feature">
          <div class="thumbnail">
            <!--img src="http://placehold.it/800x500" alt=""-->
            <div class="caption">
              <h3>Facebook Login</h3>
              <p>Login with your Facebook Account</p>
              <p><a href="facebook_login.php" class="btn btn-primary">Facebook Login</a></p>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 hero-feature">
          <div class="thumbnail">
            <!--img src="http://placehold.it/800x500" alt=""-->
            <div class="caption">
              <h3>Google Login</h3>
              <p>Google with your Google Account</p>
              <p><a href="google_login.php" class="btn btn-primary">Google Login</a> </p>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 hero-feature">
          <div class="thumbnail">
            <!--img src="http://placehold.it/800x500" alt=""-->
            <div class="caption">
              <h3>Twitter Login</h3>
              <p>Login with your Twitter Account!</p>
              <p><a href="twit_login.php" class="btn btn-primary">Twitter Login</a></p>
            </div>
          </div>
        </div>
      </div><!-- /.row -->
<!-- -->


      <div class="row text-center">
      <div class="col-lg-3 col-md-6 hero-feature">
          <div class="thumbnail">
            <!--img src="http://placehold.it/800x500" alt=""-->
            <div class="caption">
              <h3>GitHub Login</h3>
              <p>Login with your GitHub Account</p>
              <p><a href="github_login.php" class="btn btn-primary">GitHub Login</a></p>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 hero-feature">
          <div class="thumbnail">
            <!--img src="http://placehold.it/800x500" alt=""-->
            <div class="caption">
              <h3>LinkedIn Login</h3>
              <p>Login with your LinkedIn Account</p>
              <p><a href="linkedin_login.php" class="btn btn-primary">LinkedIn Login</a> </p>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 hero-feature">
          <div class="thumbnail">
            <!--img src="http://placehold.it/800x500" alt=""-->
            <div class="caption">
              <h3>Yahoo Login</h3>
              <p>Login with your Yahoo Account!</p>
              <p><a href="yahoo_login.php" class="btn btn-primary">Yahoo Login</a></p>
            </div>
          </div>
        </div>
 <div class="col-lg-3 col-md-6 hero-feature">
          <div class="thumbnail">
            <!--img src="http://placehold.it/800x500" alt=""-->
            <div class="caption">
              <h3>OpenID Login</h3>
              <p>Login with your OpenID Account!</p>
              <p><a href="openid_login.php" class="btn btn-primary">OpenID Login</a></p>
            </div>
          </div>
        </div>



</div><!-- /.row -->
     <?php include('footer.php'); ?>
