

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
             <form role="form" method="post" action="<?php echo base_url();?>update-banner-content" enctype="multipart/form-data">
                  <div class="box">
                  <div class="box-body">
                  <div class="row">
                  <div class="form-group col-md-6">
                      <label>Banner Image</label>
                      <input type="file" id="img" class="form-control required"  name="img"> <img src="<?php echo base_url().'assets/admin/image/'.$value[0]->img; ?>" class="img-responsive">
                      <input type="hidden" id="id" name="id" value="<?php echo $value[0]->id; ?>"/>
                    </div>
                    <div class="form-group col-md-6" >
                      <label>Content</label>
                      <input type="text" class="form-control required"   id="content"  name="content" value="<?php  echo $value[0]->content; ?>">
                    </div>
                    <div class="form-group col-md-6">
                      <label>footer Content</label>
                      <input type="text" class="form-control required"  id="footercontent" name="footercontent"value="<?php  echo $value[0]->footercontent; ?>">
                    </div>
                   
                    <div class=" col-md-12" >
                      <input type="hidden" id="id" name="id"  value="<?php  echo $value[0]->id; ?>"/>
                    <button type="submit" class="btn btn-success">Update</button>
                    </div>
                  </div>

                  
</div><!-- /.box-body -->
</div><!-- /.box -->
                </form>
            
                <a href="<?php echo base_url();?>show-banner-details" type="button" class="btn btn-primary">View </a>
         
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
     