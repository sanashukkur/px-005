

      <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
          
            <small></small>
          </h1>
         
        </section>

        <!-- Main content -->
        <section class="content">
          <!-- Small boxes (Stat box) -->
         
             <!-- form start -->
             <form role="form" method="post" action="<?php echo base_url();?>update-gallery-data?id=<?php echo $value[0]->id;?>" enctype="multipart/form-data">
                  <div class="box">
                  <div class="box-body">
                  <div class="row">
                  <div class="form-group col-md-6">
                      <label>Image</label>
                      <input type="file" id="Image" class="form-control" name="Image"><img src="<?php echo IMAGE_PATH.$value[0]->img;?>" class="img-responsive">
                      <input type="hidden" id="idval" name="idval" value="<?php  echo $value[0]->id; ?>"/>
                     <input type="hidden" id="imageval" name="imageval" value="<?php  echo $value[0]->img; ?>"/>
                                  
                    </div>
                    
                 
                   
                    <div class=" col-md-12" >
                    <button type="submit" class="btn btn-success">Update</button>
                    </div>
                  </div>

                  
</div><!-- /.box-body -->
</div><!-- /.box -->
                </form>
            
               
         
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
     