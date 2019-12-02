
<script>setnavActive("about");</script>
<section class="page-title">
    <div class="thm-container">
        <h3>About us</h3>        
    </div><!-- /.thm-container -->
</section><!-- /.page-title -->

<div class="breadcumb-wrapper">
    <div class="thm-container">
        <ul class="breadcumb">
            <li><a href="<?php echo base_url();?>">Homepage</a></li><!--
            --><li><span class="sep">-</span></li><!--
            --><li><span>About Us</span></li>
        </ul><!-- /.breadcumb -->
    </div><!-- /.thm-container -->
</div><!-- /.breadcumb-wrapper -->

<section class="about-section sec-pad">

    <div class="thm-container">
 
        <div class="row masonary-layout">
        <?php 

foreach ($works as $key => $val) { 

   
 
  ?>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="single-about">
              
                    <div class="img-box">
                        <img src="<?php echo IMAGE_PATH.$val->image;?>" alt="Awesome Image"/>
                    </div><!-- /.img-box -->
                    <div class="text-box hvr-bounce-to-bottom">
                        <a href="#"><h3><?php echo $val->title;?></h3></a>
                        <p><?php echo $val->content;?></p>
                        <a href="#" class="read-more fas fa-angle-right"></a>
                    </div><!-- /.text-box -->
                </div><!-- /.single-about -->
            </div><!-- /.col-md-4 -->
           
            <?php
}
?>
        </div><!-- /.row -->
       
    </div><!-- /.thm-container -->
   
</section><!-- /.about-section -->

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

 
<section class="team-section sec-pad">
    <div class="thm-container">
        <div class="sec-title text-center">
        <span>The leadership</span>
        <?php 

foreach ($meetteam as $key => $val) { 

   
 
  ?>
          
            <h3><?php echo $val->title;?></h3>
            <p><?php echo $val->content;?></p>
            <?php
}
?>
        </div><!-- /.sec-title -->
        <div class="team-carousel owl-carousel owl-theme">
        <?php 

foreach ($team as $key => $val) { 

   
 
  ?>
            <div class="item">
                <div class="single-team-carousel">
                    <div class="inner">
                        <div class="img-box">
                            <img src="<?php echo IMAGE_PATH.$val->img;?>" alt="Awesome Image"/>
                        </div><!-- /.img-box -->
                        <div class="team-content">
                            <div class="title">
                              <span><?php echo $val->sub_heading;?></span>
                                <h3><?php echo $val->heading;?></h3>
                            </div><!-- /.title -->
                            <p><?php echo $val->content;?></p>
                            <p><?php echo $val->body;?></p>
                        </div><!-- /.team-content -->
                    </div><!-- /.inner -->
                </div><!-- /.single-team-carousel -->
            </div><!-- /.item -->
           
            <?php
}
?>
        </div><!-- /.team-carousel -->
    </div><!-- /.thm-container -->
</section><!-- /.team-section -->



<!-- /.service-style-two -->

<!-- /.faq-section -->

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