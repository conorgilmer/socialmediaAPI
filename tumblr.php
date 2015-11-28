<?php include('header.php'); ?>

   


<div class="container">

      <!--div class="jumbotron hero-spacer">
        <h1>My Web presences!</h1>
        <p>A composite website showing my social media accounts!</p>
        <p><a class="btn btn-primary btn-large">List accounts!</a></p>
      </div>
      
      <hr-->
      
      <div class="row">
        <div class="col-lg-12">
           <h3>Tumblr</h3>
        </div>
      </div><!-- /.row -->
      
      <div class="row text-center">

        <div class="col-lg-4 col-md-6 hero-feature">
          <div class="thumbnail">
              <h3>Tumblr Buttons</h3>
            

<a class="tumblr-share-button" data-color="blue" data-notes="right" href="https://embed.tumblr.com/share"></a>
<script>!function(d,s,id){var js,ajs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://secure.assets.tumblr.com/share-button.js";ajs.parentNode.insertBefore(js,ajs);}}(document, "script", "tumblr-js");</script>

<h3>Follow Button (Generic)</h3>
<iframe class="btn" frameborder="0" border="0" scrolling="no" allowtransparency="true" height="50" width="65" src="https://platform.tumblr.com/v2/follow_button.html?type=follow&amp;tumblelog=conorgilmer&amp;color=blue"></iframe>

<h3>Follow Button (Name)</h3>
<iframe class="btn" frameborder="0" border="0" scrolling="no" allowtransparency="true" height="80" width="120" src="https://platform.tumblr.com/v2/follow_button.html?type=follow-blog&amp;tumblelog=conorgilmer&amp;color=blue"></iframe>

            <div class="caption">
            </div> <!-- caption-->
          </div>   <!-- thumbnail-->
        </div>     <!-- class -->

        <div class="col-lg-4 col-md-6 hero-feature">
          <div class="thumbnail">
            <div class="caption">
              <h3>Tumblr Widget</h3>
		<div class="tumblr-post" data-href="https://embed.tumblr.com/embed/post/fbS6b1IDfYRnrcGbrog61g/119934876610" data-did="eabbba35e8e3d44898f21663cf50b4bdd7ce1474"><a href="http://conorgilmer.tumblr.com/post/119934876610/viber-skype-and-whatsapp">http://conorgilmer.tumblr.com/post/119934876610/viber-skype-and-whatsapp</a>
		</div>   <!-- tumblr post -->
		<script async src="https://secure.assets.tumblr.com/post.js"></script>

            </div> <!-- caption-->
          </div>   <!-- thumbnail-->
        </div>     <!-- class -->
        

        <div class="col-lg-4 col-md-6 hero-feature">
          <div class="thumbnail">
            <div class="caption">
		<h2>Post returned by PHP</h2>
		<?php
		    for ($num=0; $num<5; $num++){
        		$request_url = "http://conorgilmer.tumblr.com/api/read?start=$num&num=5&type=text";
        		$xml = simplexml_load_file($request_url);
        		$title = $xml->posts->post->{'regular-title'};
        		$post = $xml->posts->post->{'regular-body'};
        		$link = $xml->posts->post['url'];
        		$small_post = substr($post,0,120);
        		echo '<p><h3><i>'.$title.'</i></h3>';
        		echo ''.$small_post.'... ';
        		echo "<a target=frame2 href='".$link."'>Read More</a> </p>";
		    }
		?>
            </div> <!-- caption-->
          </div>   <!-- thumbnail-->
        </div>     <!-- class -->


      </div><!-- /.row -->

     <?php include('footer.php'); ?>
