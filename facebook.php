<?php include('header.php'); ?>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=601269226604211";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div class="container">

      <!--div class="jumbotron hero-spacer">
        <h1>My Web presences!</h1>
   
      </div>
      
      <hr-->
      
      <div class="row">
        <div class="col-lg-12">
           <h3>Facebook Features</h3>
        </div>
      </div><!-- /.row -->
      
      <div class="row text-center">

        <div class="col-lg-3 col-md-6 hero-feature">
          <div class="thumbnail">
            <div class="caption">
              <h3>Feature Like Button</h3>
              <p>New Adventures in Facebook</p>
              <div class="fb-like" data-href="http://www.appwayz.com/" 
                   data-colorscheme="light" data-layout="standard" data-action="like" 
                   data-show-faces="true" data-send="true">
                  
              </div>
              
              
             </div>
          </div>
            
            
                <div class="thumbnail">
            <div class="caption">
              <h3>Face Pile</h3>
              <p>A pile of faces</p>
              
              <div class="fb-facepile" data-app-id="601269226604211" 
                   data-href="http://facebook.com/CafeLibred2" 
                   data-width="240" data-max-rows="4" data-colorscheme="light" 
                   data-size="medium" data-show-count="true">
                  
              </div>
           
             </div>
          </div>
            
                <div class="thumbnail">
            <div class="caption">
              <h3>Follow Cafe Libre</h3>
              <p>Follow Us</p>
           
               <div class="fb-facepile" data-app-id="601269226604211" 
                   data-href="http://facebook.com/CafeLibred2" 
                   data-width="240" data-max-rows="4" data-colorscheme="light" 
                   data-size="medium" data-show-count="true">
                  
              </div>
             </div>
          </div>
            
            
            
           
        </div>

        <div class="col-lg-3 col-md-6 hero-feature">
          <div class="thumbnail">
            <div class="caption">
              <h3>Feature Label</h3>
              <p>This would be a great spot to feature some brand new products!</p>
            <div class="fb-activity" data-app-id="601269226604211" 
                 data-site="www.facebook.com/cafelibred2" data-action="likes, recommends" 
                 data-width="240px" data-height="320px" data-colorscheme="light" data-header="true"></div>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 hero-feature">
          <div class="thumbnail">
            <div class="caption">
              <h3>Facebook Page </h3>
              <p>Facebook page for Cafe Libre - part of Corona Lua Project.</p>
             
            <div class="fb-like-box" data-href="http://www.facebook.com/cafelibred2" 
                 data-width="240" data-colorscheme="light" data-show-faces="true" data-header="true" data-stream="true" data-show-border="true"></div>
            </div>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 hero-feature">
          <div class="thumbnail">
           <div class="caption">
              <h3>Facebook Comments</h3>
              <p>This would be a great spot to feature some brand new products!</p>
           <div class="fb-comments" data-href="http://www.appwayz.com/socialmediaAPI" 
                data-width="240" data-height="320"  data-numposts="5"></div>   
           </div>
          </div>
        </div>


      </div><!-- /.row -->
     <?php include('footer.php'); ?>