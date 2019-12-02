<!DOCTYPE html>
<html lang="en">


<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
    <meta charset="UTF-8" />
    <title>Home | Printing in Dubai, Business Card Printing</title>
    <!-- mobile responsive meta -->
    
  
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo base_url();?>assets/user/img/favicon/favicon-16x16.png">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="../ms-icon-144x144.html">
    <meta name="theme-color" content="#ffffff">
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/user/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/user/css/responsive.css">
    <script src="<?php echo base_url();?>/assets/user/js/jquery.js"></script>
    <script>
function setnavActive(classn)
{
		$('.navigations li').each(function(i)
		{
		$(this).removeClass('current'); // This is your rel value
		});
		$('.'+classn).addClass("current");
}
</script>
</head>
<?php 

    foreach ($data as $key => $value) { 
      
        ?> 
<body class="active-preloader-ovh">

<div class="preloader"><div class="spinner"></div></div><!-- /.preloader -->



<header class="header home-page-one">
    <nav class="navbar navbar-default header-navigation stricky">
        <div class="thm-container clearfix">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".main-navigation" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">
                    <img src="<?php echo IMAGE_PATH.$value->logo;?>" alt="Awesome Image"/>
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse main-navigation mainmenu " id="main-nav-bar">
                
                <ul class="nav navbar-nav navigation-box navigations">
                    <li class="home current"> 
                        <a href="<?php echo base_url();?>">Home</a> 
                        
                    </li>
                    <li class="about"> <a href="<?php echo base_url();?>about-form">About</a> </li>
                    <li class="service"> 
                        
                        <a href="<?php echo base_url().'service/'.$service[0]->formattedtext;?>">Services</a> 
                        <ul class="sub-menu">
                        <?php foreach($service as $key=>$val)
                        {
?> <li><a href="<?php echo base_url();?>service/<?=$val->formattedtext;?>"><?php echo $val->heading;?></a></li>
<?php
                        }
                    ?>
                           
                        
                        </ul><!-- /.sub-menu -->
                    </li>
                    <li class="gallery"> 
                        <a href="<?php echo base_url();?>gallery-form">gallery</a> 
                        
                    </li>
                    
                    <li class="contact"> <a href="<?php echo base_url();?>contact-form">Contact</a> </li>
                </ul>                
            </div><!-- /.navbar-collapse -->
            <div class="right-side-box">
            	<div class="social">
            		<a href="<?php echo $value->twitter_url;?>" class="fab fa-twitter hvr-pulse"></a><!--  
            		 --><a href="<?php echo $value->pinterest_url;?>" class="fab fa-pinterest hvr-pulse"></a><!--  
            		 --><a href="<?php echo $value->facebook_url;?>" class="fab fa-facebook-f hvr-pulse"></a><!--  
            		 --><a href="<?php echo$value->youtube_url;?>" class="fab fa-youtube hvr-pulse"></a>
                   <?php
               
                   }
                   ?>
            	</div><!-- /.social -->
            </div><!-- /.right-side-box -->
        </div><!-- /.container -->
    </nav>   
</header><!-- /.header -->

