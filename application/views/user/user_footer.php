	
<footer class="footer">
	<div class="thm-container">
		<div class="row">
			<div class="col-md-4">
				<div class="footer-widget about-widget">
					<div class="title">
						<h3>About Printify</h3>
					</div><!-- /.title -->
					<p><?php echo word_limiter($about[0]->body,37);?></p>
					
                    <form action="<?php echo base_url();?>contact-form" class="footer-subscribe">
                        <input type="text" name="email" placeholder="Email address">
                        <button type="submit"><i class="fa fa-angle-right"></i></button>
                    </form><!-- /.footer-subscribe -->
				</div><!-- /.footer-widget about-widget -->
			</div><!-- /.col-md-4 -->
			<div class="col-md-4">
				<div class="footer-widget links-widget explore">
					<div class="title">
						<h3>Explore</h3>
					</div><!-- /.title -->
					<ul class="link-list">
						<li><a href="<?php echo base_url();?>">Home</a></li>
						<li><a href="<?php echo base_url();?>about-form">About</a></li>
						<li><a href="<?php echo base_url().'service/'.$service[0]->formattedtext;?>">Services</a></li>
						<li><a href="<?php echo base_url();?>contact-form">Contact</a></li>
						
					</ul><!-- /.link-list -->
				</div><!-- /.footer-widget links-widget explore -->
			</div><!-- /.col-md-2 -->

			<div class="col-md-4">
				<div class="footer-widget contact-widget">
					<div class="title">
						<h3>Contact</h3>
						<?php 

    foreach ($data as $key => $value) { 
      
        ?> 
					</div><!-- /.title -->
					<p>Tel: +<?php echo $value->company_tele;?></p>
					<p>Mob: +<?php echo $value->company_mob;?></p>
					
					<p><a href=""><?php echo $value->company_email;?></a></p>
					<br /> 
					<div><?php echo $value->company_address;?></div>
					
					<p>&nbsp;</p>
					<?php
					}
					?>
				</div><!-- /.footer-widget links-widget explore -->
			</div><!-- /.col-md-3 -->
		</div><!-- /.row -->
	</div><!-- /.thm-contianer -->
</footer><!-- /.footer -->
<div class="footer-bottom">
	<div class="thm-container clearfix">
		<div class="pull-left copy-text">
			<p>&copy; Copyright 2019 Created by <a href="http://palmtrix.com/">palmtrix.com</a></p>
		</div><!-- /.pull-left copy-text -->
		<div class="social-box pull-right">
            <a href="<?php echo $value->twitter_url;?>" class="fab fa-twitter hvr-pulse"></a><!--  
             --><a href="<?php echo $value->pinterest_url;?>" class="fab fa-pinterest hvr-pulse"></a><!--  
             --><a href="<?php echo $value->facebook_url;?>" class="fab fa-facebook-f hvr-pulse"></a><!--  
             --><a href="<?php echo $value->youtube_url;?>" class="fab fa-youtube hvr-pulse"></a>
        </div><!-- /.social-box -->
	</div><!-- /.thm-container -->
</div><!-- /.footer-bottom -->

<div class="scroll-to-top scroll-to-target" data-target="html"><i class="fas fa-angle-up"></i></div>                    



<script src="<?php echo base_url();?>/assets/user/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>/assets/user/js/bootstrap-select.min.js"></script>
<script src="<?php echo base_url();?>/assets/user/js/jquery.validate.min.js"></script>
<script src="<?php echo base_url();?>/assets/user/js/owl.carousel.min.js"></script>
<script src="<?php echo base_url();?>/assets/user/js/isotope.js"></script>
<script src="<?php echo base_url();?>/assets/user/js/jquery.magnific-popup.min.js"></script>
<script src="<?php echo base_url();?>/assets/user/js/waypoints.min.js"></script>
<script src="<?php echo base_url();?>/assets/user/js/jquery.counterup.min.js"></script>
<script src="<?php echo base_url();?>/assets/user/js/wow.min.js"></script>
<script src="<?php echo base_url();?>/assets/user/js/jquery.easing.min.js"></script>
<script src="<?php echo base_url();?>/assets/user/js/custom.js"></script>


<script src="<?php echo base_url();?>assets/user/js/gallery.js"></script>
<!-- abcd -->
<!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script> -->
<!-- google map helper -->  
<!-- <script src="<?php echo base_url();?>/assets/js/gmaps.js"></script>
<script src="<?php echo base_url();?>/assets/js/map-helper.js"></script> -->

<script type="text/javascript" async="" src="http://www.google-analytics.com/ga.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false&amp;key=AIzaSyCdfN9Z9FJic-x5BMhHB5AeF09a-Huk_Fs"></script>
<script>
var map;
var iconBase='images/';
function initialize()
{
	var mapOptions={zoom:12,center:new google.maps.LatLng(9.99569,76.30255)};
	var styles=[{stylers:[{hue:"#a7aa60"},{saturation:-20}]},
	{featureType:"geometry",elementType:"labels.text.fill",
	stylers:[{lightness:0},{visibility:"simplified"}]},
	{featureType:"geometry",elementType:"labels.text.fill",stylers:[{visibility:"off"}]}];
	map=new google.maps.Map(document.getElementById('map-canvas'),mapOptions);
	var pos=new google.maps.LatLng(9.99569,76.30255,1);
	var marker=new google.maps.Marker({position:pos,map:map,title:'Aspin Labs',icon:iconBase+'img-google-map.png'});google.maps.event.addListener(marker,'click',function(){infowindow.open(map,marker);});map.setOptions({styles:styles});}
google.maps.event.addDomListener(window,'load',initialize);</script>
</body>
</html>