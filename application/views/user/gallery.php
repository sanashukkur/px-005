
<script>setnavActive("gallery");</script>
<section class="page-title">
    <div class="thm-container">
        <h3>Gallery</h3>        
    </div><!-- /.thm-container -->
</section><!-- /.page-title -->

<div class="breadcumb-wrapper">
    <div class="thm-container">
        <ul class="breadcumb">
            <li><a href="<?php echo base_url();?>">Homepage</a></li><!--
            --><li><span class="sep">-</span></li><!--
            --><li><span>Gallery</span></li>
        </ul><!-- /.breadcumb -->
    </div><!-- /.thm-container -->
</div><!-- /.breadcumb-wrapper -->
<section class="recent-projects project-page sec-pad">
   
	<div class="container">
        <div class="row">
            <div class="container">
                <div class="row">
                    <div class="row">
           
                        <?php 
                        foreach($pic as $key=>$val)
                        {
                            ?>
        
         
      
                        <div class="col-lg-3 col-md-3 col-xs-6 thumb">
                                <a class="tmb" href="#" data-image-id="" data-toggle="modal" data-title=""
                                data-image="<?php echo IMAGE_PATH.$val->img;?>"
                                data-target="#image-gallery">
                                    <img class="img-thumbnail"
                                        src="<?php echo IMAGE_PATH.$val->img;?>"
                                        alt="Another alt text">
                                </a>
                       </div>
                                <?php
                        }
                        ?>
                    </div>
                   
        <div class="modal fade" id="image-gallery" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    
                
                    <div class="modal-header">
                   
                        <h4 class="modal-title" id="image-gallery-title"></h4>
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span>
                        </button>
                    </div>
                    <div class="modal-body">
                    <?php 
                        // foreach($pic as $key=>$val)
                        // {
                            ?>
                        <img id="image-gallery-image" class="image-gallery-image img-responsive col-md-12" src=""/>
                        <?php
                        // }
                        ?>
                    </div>
                    <div class="modal-footer">
                    
                        <button type="button" class="btn btn-secondary float-left" id="show-previous-image"><i class="fa fa-arrow-left"></i>
                        </button>

                        <button type="button" id="show-next-image" class="btn btn-secondary float-right"><i class="fa fa-arrow-right"></i>
                        </button>
                       
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
	
	
	
</section><!-- /.recent-projects -->

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

