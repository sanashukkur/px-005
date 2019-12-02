
<script>setnavActive("service");</script>
<section class="page-title">
    <div class="thm-container">
        <h3>Services</h3>        
    </div><!-- /.thm-container -->
</section><!-- /.page-title -->

<div class="breadcumb-wrapper">
    <div class="thm-container">
        <ul class="breadcumb">
            <li><a href="<?php echo base_url();?>">Homepage</a></li><!--
            --><li><span class="sep">-</span></li><!--
            --><li><span>Services</span></li>
        </ul><!-- /.breadcumb -->
    </div><!-- /.thm-container -->
</div><!-- /.breadcumb-wrapper -->
	
	<section class="what-we-do sec-pad service-page">
    <div class="thm-container">
        <div class="sec-title text-center">
            <!--<span>Our features</span>
            <h3>What We Do</h3>-->
            <p></p>
        </div><!-- /.sec-title -->
        <div class="row">
            <div class="col-md-6">
            
                <div class="single-what-we-do">
                    <div class="img-box img_size">
                        <img src="<?php echo IMAGE_PATH.$service[0]->img;?>" alt="" />
                    </div><!-- /.img-box -->
                    <div class="text-box hvr-bounce-to-bottom">
                        <a href="#"><h3><?php echo $service[0]->heading;?></h3></a>
                        <p><?php echo $service[0]->content;?></p>
                        <a href="<?php echo base_url().'service/'.$service[0]->formattedtext;?>" class="read-more fas fa-angle-right"></a>
                    </div><!-- /.text-box -->
                </div><!-- /.single-what-we-do -->
            </div><!-- /.col-md-6 -->
            <div class="col-md-6">
               
                <?php foreach($allservice as $key=>$val)
                {
                    ?>
               
                <div class="single-what-we-do-two clearfix">
                    <div class="img-box img_service">
                        <img src="<?php echo IMAGE_PATH.$val->img;?>" alt="Awesome Image"/>
                    </div><!-- /.img-box -->
                    <div class="text-box">
                         <h3><?php echo $service[0]->heading;?></h3>
                        <p><?php echo $service[0]->content;?></p>
                    </div><!-- /.text-box -->
                </div><!-- /.single-what-we-do-two -->
                <?php } ?>
            </div><!-- /.col-md-6 -->
  
        </div><!-- /.row -->
    </div><!-- /.thm-container -->
</section>


<!-- /.what-we-do -->

<div class="brand-carousel-wrapper">
    <div class="thm-container">
        <div class="brand-carousel owl-theme owl-carousel">
            <div class="item">
                <img src="<?php echo base_url();?>/assets/user/img/brand-1-1.png" alt="Awesome Image"/>
            </div><!-- /.item -->
            <div class="item">
                <img src="<?php echo base_url();?>/assets/user/img/brand-1-2.png" alt="Awesome Image"/>
            </div><!-- /.item -->
            <div class="item">
                <img src="<?php echo base_url();?>/assets/user/img/brand-1-3.png" alt="Awesome Image"/>
            </div><!-- /.item -->
            <div class="item">
                <img src="<?php echo base_url();?>/assets/user/img/brand-1-4.png" alt="Awesome Image"/>
            </div><!-- /.item -->
            <div class="item">
                <img src="<?php echo base_url();?>/assets/user/img/brand-1-5.png" alt="Awesome Image"/>
            </div><!-- /.item -->
            <div class="item">
                <img src="<?php echo base_url();?>/assets/user/img/brand-1-6.png" alt="Awesome Image"/>
            </div><!-- /.item -->
        </div><!-- /.brand-carousel -->
    </div><!-- /.thm-container -->
</div><!-- /.brand-carousel-wrapper -->
