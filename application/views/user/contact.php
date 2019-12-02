

<script>setnavActive("contact");</script>
<!-- <div class="google-map" 
  id="contact-google-map" 
  data-map-lat="40.712784" 
  data-map-lng="-74.005941" 
  data-icon-path="img/map-marker.png"
  data-map-title="Brooklyn, New York, United Kingdom"
  data-map-zoom="11"
  data-markers='{
            "marker-1": [40.712784, -74.005941, "<h4>Main Office</h4><p>Babylon Branch , Lindenhurst, UK</p>"],
            "marker-2": [40.728157, -74.077642, "<h4>Branch Office</h4> <p>291 Park Ave S, East Meadow, UK</p>"]
        }'>

 </div> -->

 <div 
 style="width: 100%">
 <iframe width="100%" height="580" 
 src="https://maps.google.com/maps?width=100%&amp;height=580&amp;hl=en&amp;q=Near%20Naif%20Souq%2C%20Opp%20Florida%20Al%20Souk%20Hotel%20Al%20Jaziri%20Bldg%2C%20Deira%2C%20PO%20Box%3A%20376490%20Dubai%2C%20United%20Arab%20Emirates+(colourtouch)&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=B&amp;output=embed" 
 frameborder="0" 
 scrolling="no" 
 marginheight="0" 
 marginwidth="0">
 <a href="https://www.maps.ie/coordinates.html">gps coordinates</a>
 </iframe>
 </div>
 <br />


 <section class="contact-section sec-pad">
     <div class="thm-container">
         <div class="row">
             <div class="col-md-8">
                 <div class="contact-form-content">
                     <div class="title">
                         <span>Contact with us</span>
                         <h2>Send Message</h2>
                     </div><!-- /.title -->
                     <form action="<?php echo base_url();?>contactform" class="contact-form">
                         <input type="text" name="name" placeholder="Your full name" />
                         <input type="text" name="phno" required placeholder="Your phone number" />
                         <input type="text" name="email" placeholder="Your email address" />
                         <textarea name="message" placeholder="What you are looking for?"></textarea>
                         <button type="submit" class="thm-btn yellow-bg">Submit Now</button>
                         <div class="form-result"></div><!-- /.form-result -->
                     </form>
                 </div><!-- /.contact-form-content -->
             </div><!-- /.col-md-8 -->
             <?php 

foreach ($contact as $key => $val) { 

   
 
  ?>
             <div class="col-md-4">
                 <div class="contact-info text-center">
                     <div class="title text-center">
                        <span>Contact info</span>
                        <h2>Details</h2>
                     </div><!-- /.title -->
                     <div class="single-contact-info">
                         <h4>Address</h4>
                         <p><?php echo $val->address;?></p>
                     </div><!-- /.single-contact-info -->
                     <div class="single-contact-info">
                         <h4>Phone</h4>
                         <p>Tel:<?php echo $val->tele;?><br> Mob: <?php echo $val->mobile;?></p>
                     </div><!-- /.single-contact-info -->
                     <div class="single-contact-info">
                         <h4>Email</h4>
                         <p><?php echo $val->email;?></p>
                     </div><!-- /.single-contact-info -->
                     <?php
}
?>
<?php 

foreach ($data as $key => $val) { 

   
 
  ?>
                     <div class="single-contact-info">
                         <h4>Follow</h4>
                         <div class="social">
                            <a href="<?php echo $val->twitter_url;?>" class="fab fa-twitter hvr-pulse"></a><!--  
                             --><a href="<?php echo $val->pinterest_url;?>" class="fab fa-pinterest hvr-pulse"></a><!--  
                             --><a href="<?php echo $val->facebook_url;?>" class="fab fa-facebook-f hvr-pulse"></a><!--  
                             --><a href="<?php echo $val->youtube_url;?>" class="fab fa-youtube hvr-pulse"></a>
                        </div><!-- /.social -->
                     </div><!-- /.single-contact-info -->
                     <?php
}
?>
                 </div><!-- /.contact-info -->
             </div><!-- /.col-md-4 -->
         </div><!-- /.row -->
     </div><!-- /.thm-container -->
 </section><!-- /.contact-section -->


