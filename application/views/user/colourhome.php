
<script>setnavActive("home");</script>
<section class="banner-style-two">
    <div class="thm-container-fluid clearfix">
        <div class="col-md-6">
            <div class="banner-carousel-two owl-carousel owl-theme">
            <?php 

 foreach ($dat as $key => $value) { 
 
    
  
   ?> 
            <div class="item">
               

                    <div class="single-banner-carousel text-center">
                        <span><?php echo word_limiter($value->banner_title,8);?></span>
                        <h2><?php echo word_limiter($value->banner_content,3);?></h2>
                        <a href="<?php echo base_url();?>about-form" class="thm-btn yellow-bg">Our Pricing</a>
                    </div><!-- /.single-banner-carousel -->
                </div><!-- /.item -->
<?php 
}
?>
            </div><!-- /.banner-carousel-two owl-carousel owl-theme -->
        </div><!-- /.col-md-6 -->
        <div class="col-md-6">
            <img src="assets/user/img/banner-featured-1-1.png" class="pull-left" alt="Awesome Image"/>
        </div><!-- /.col-md-6 -->
    </div><!-- /.thm-container-fluid -->
</section><!-- /.banner-style-two -->


<section class="welcome-section sec-pad">
    <div class="thm-container">
        <div class="row">
            <div class="col-md-6">
                <div class="welcome-img-box">
                <?php 

foreach ($welcome as $key => $val) { 

   
 
  ?> 
      
                    <img src="<?php echo IMAGE_PATH.$val->img;?>" alt="Awesome Image"/>
                </div><!-- /.welcome-img-box -->
            </div><!-- /.col-md-6 -->
            <div class="col-md-6">
                <div class="welcome-content">
                    <div class="title">
                        <p><?php echo $val->title;?></p>
                        <h3><?php echo $val->content;?></h3>
                    </div><!-- /.title -->
                    <p><?php echo word_limiter($val->body,74);?></p>
                    <?php
}
?>
                    <a href="<?php echo base_url();?>about-form" class="thm-btn yellow-bg">Learn More</a>
                </div><!-- /.welcome-content -->
            </div><!-- /.col-md-6 -->
        </div><!-- /.row -->
    </div><!-- /.thm-container -->
</section><!-- /.welcome-section -->

<section class="service-style-two">
    <div class="overlay"></div><!-- /.overlay -->
    <div class="thm-container">
        <div class="row">
            <div class="col-md-6">
                <div class="service-content">
                <?php 

foreach ($banner2 as $key => $val) { 

   
 
  ?>
                    <span><?php echo $val->title;?></span>
                    <h2><?php echo $val->content;?> </h2>
                    <p><?php echo word_limiter($val->description,35);?></p>
                </div><!-- /.service-content -->
            </div><!-- /.col-md-6 -->
            <div class="col-md-6">
                <div class="row">
                    <div class="col-sm-4 text-center">
                        <div class="unique-feature">
                            <img src="assets/user/img/unique-feature-hand.png" alt="Awesome Image"/>
                            <div class="content">
                                <i class="<?php echo $val->iconstyle1;?>"></i>
                                
                                <a href="<?php echo base_url().'service/'.$service[0]->formattedtext;?>"><h3><?php echo $val->iconheading1;?></h3></a>
                            </div><!-- /.content -->
                        </div><!-- /.unique-feature -->
                    </div><!-- /.col-sm-4 -->
                    <div class="col-sm-4 text-center">
                        <div class="unique-feature">
                            <img src="assets/user/img/unique-feature-hand.png" alt="Awesome Image"/>
                            <div class="content">
                                <i class="<?php echo $val->iconstyle2;?>"></i>
                                <a href="<?php echo base_url().'service/'.$service[0]->formattedtext;?>"><h3><?php echo $val->iconheading2;?></h3></a>
                            </div><!-- /.content -->
                        </div><!-- /.unique-feature -->
                    </div><!-- /.col-sm-4 -->
                    <div class="col-sm-4 text-center">
                        <div class="unique-feature">
                            <img src="assets/user/img/unique-feature-hand.png" alt="Awesome Image"/>
                            <div class="content">
                                <i class="<?php echo $val->iconstyle3;?>"></i>
                                <a href="<?php echo base_url().'service/'.$service[0]->formattedtext;?>"><h3><?php echo $val->iconheading3;?></h3></a>
                            </div><!-- /.content -->
                        </div><!-- /.unique-feature -->
                    </div><!-- /.col-sm-4 -->
                </div><!-- /.row -->
            </div><!-- /.col-md-6 -->
        </div><!-- /.row -->
        <?php
}
?>
    </div><!-- /.thm-container -->
</section><!-- /.service-style-two -->
<?php 

foreach ($banner3 as $key => $val) { 

   
 
  ?>
<section class="video-box-design-guide sec-pad service-tab-box">
    <div class="thm-container">
        <div class="tab-title">
            <ul class="list-inline" role="tablist">
                <li class="active" data-tab-name="tshirt"><a href="#tshirt" aria-controls="tshirt" role="tab" data-toggle="tab" class="hvr-bounce-to-bottom">
                    <i class="<?php echo $val->iconstyle1;?>"></i>
                    <h3><?php echo word_limiter($val->icontitle1,2);?></h3>
                </a></li><!--
                --><li data-tab-name="flyer"><a href="#flyer" aria-controls="flyer" role="tab" data-toggle="tab" class="hvr-bounce-to-bottom">
                    <i class="<?php echo $val->iconstyle2;?>"></i>
                    <h3><?php echo word_limiter($val->icontitle2,2);?></h3>
                </a></li><!--
                --><li data-tab-name="poster"><a href="#poster" aria-controls="poster" role="tab" data-toggle="tab" class="hvr-bounce-to-bottom">
                    <i class="<?php echo $val->iconstyle3;?>"></i>
                    <h3><?php echo word_limiter($val->icontitle2,2);?></h3>
                </a></li><!--
                --><li data-tab-name="sticker"><a href="#sticker" aria-controls="sticker" role="tab" data-toggle="tab" class="hvr-bounce-to-bottom">
                    <i class="<?php echo $val->iconstyle4;?>"></i>
                    <h3><?php echo word_limiter($val->icontitle4,2);?></h3>
                </a></li><!--
                --><li data-tab-name="postcard"><a href="#postcard" aria-controls="postcard" role="tab" data-toggle="tab" class="hvr-bounce-to-bottom">
                    <i class="<?php echo $val->iconstyle5;?>"></i>
                    <h3><?php echo word_limiter($val->icontitle5,2);?></h3>
                </a></li>
            </ul><!-- /.list-inline -->
        </div><!-- /.tab-title --><!-- /.tab-content -->
    </div><!-- /.thm-container -->
</section><!-- /.video-box-design-guide -->
<?php
}
?>
  
<section class="testi-carousel-wrapper">

	<div class="overlay"></div><!-- /.overlay -->
   
    <div class="thm-container">
  
	    <div class="testi-carousel owl-carousel owl-theme">
        <?php 

foreach ($banner4 as $key => $val) { 

   
 
  ?>
	        <div class="item single-testimonials">
                <div class="img-box">
               
                    <img src="<?php echo IMAGE_PATH.$val->img;?>" alt="Awesome Image"/>
                </div><!-- /.img-box -->
                <div class="text-box">
                    <h3><?php echo $val->content;?></h3>
                    <p><?php echo $val->footercontent;?></p>
                </div><!-- /.text-box -->
	        </div>
	        
            <?php
}
?>
	    </div>
      
    </div><!-- /.thm-container -->
    
</section><!-- /.testi-carousel-wrapper -->



<?php 

foreach ($banner5 as $key => $val) { 

   
 
  ?>
<section class="cta-style-three">
    <div class="thm-container text-center">
        <span><?php echo $val->title;?></span>
        <h2><?php  echo $val->content;?></h2>
      
        <a href="<?php echo base_url();?>about-form" class="thm-btn">Get Sample</a>
    </div><!-- /.thm-container -->
</section><!-- /.cta-style-three -->

<?php
}
?>

<div class="brand-carousel-wrapper">
	<div class="thm-container">
		<div class="brand-carousel owl-theme owl-carousel">
			
            <?php 

foreach ($banner6 as $key => $val) { 

   
 
  ?>
  <div class="item">
				<img src="<?php echo IMAGE_PATH.$val->logo_images;?>" alt="Awesome Image"/>
			</div><!-- /.item -->
			<?php
}
?>

		</div><!-- /.brand-carousel -->
	</div><!-- /.thm-container -->
</div><!-- /.brand-carousel-wrapper -->


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
                         <!-- <input type="text" name="phno" placeholder="Your phone number" aria-required="true" class="error" aria-invalid="true"> -->
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
                         <p>Tel: <?php echo $val->tele;?><br /> Mob: <?php echo $val->mobile;?></p>
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
                 </div><!-- /.contact-info -->
             </div><!-- /.col-md-4 -->
         </div><!-- /.row -->
     </div><!-- /.thm-container -->
 </section><!-- /.contact-section -->

<?php
}
?>

	
	
	

<section class="">
	
<div style="width: 100%"><iframe width="100%" height="600" src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;q=1%20GraftoNear%20Naif%20Souq%2C%20Opp%20Florida%20Al%20Souk%20Hotel%20Al%20Jaziri%20Bldg%2C%20Deira%2C%20PO%20Box%3A%20376490%20Dubai%2C%20United%20Arab%20Emiratesn%20Street%2C%20Dublin%2C%20Ireland+(Colour%20Touch)&amp;ie=UTF8&amp;t=&amp;z=14&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"><a href="<?php echo $map->map_url;?>">find my coordinates</a></iframe></div>	
    <div id="map-canvas" style="position: relative; overflow: hidden;">
</div>	
</section>	
