<?php include('header.php'); ?>

<div class="container">

        <!--div class="jumbotron hero-spacer">
        <h1>My Web presences!</h1>
        <p>A composite website showing my social media accounts!</p>
      </div>
      
      <hr-->
      
       <div class="row">
        <div class="col-lg-12">
           <h3>Native Login</h3>
        </div>
      </div><!-- /.row -->
      
          
             <div class="row text-center">

<form class="form-horizontal" action="login_native.php" method="POST"> 
	    
	    <div class="control-group">
	    	<label class="control-label" for="username">Username:</label> 
	      	<div class="controls">
	    		<input type ="text" id="username" name="username" /> 
	 	 	</div>
	    </div>
	    
	    <div class="control-group">
	      	<label  class="control-label" for="password">Password</label> 
		    <div class="controls">
		    	<input type="password" id="password" name="password" />
		    </div>
	    </div>
	    
	    <div class="control-group">
		    <div class="controls">
		   		<input type="submit" value="Login" />
		    </div>
	    </div>

	    <small> u:guest p:letmein </small>
	    
	</form>
      </div><!-- /.row -->
     <?php include('footer.php'); ?>
