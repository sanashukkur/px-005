
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
             <form role="form" method="post" action="<?php echo base_url();?>update-banner5" enctype="multipart/form-data">
                  <div class="box">
                  <div class="box-body">
                  <div class="row">
                  <div class="form-group col-md-6">
                      <label>Background Image</label>
                      <input type="file" id="bgimage" name="bgimage" class="form-control" ><img src="<?php echo base_url().'assets/admin/image/'.$value[0]->bg_image; ?>" class="img-responsive">
                      <input type="hidden" id="idval" name="idval" value="<?php  echo $value[0]->id; ?>"/>
                     <input type="hidden" id="imageval" name="imageval" value="<?php  echo $value[0]->bg_image; ?>"/>   
                    </div>
                    <div class="form-group col-md-6" >
                      <label>Title</label>
                      <input type="text" class="form-control required" required id="title"  name="title" value='<?php echo $value[0]->title;?>' >
                    </div>
                    <div class="form-group col-md-6">
                      <label>Content</label>
                      <input type="text" class="form-control" id="content" name="content" value='<?php echo $value[0]->content;?>'>
                    </div>
                    <div class=" col-md-12" >
                    <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                  </div>

                  
</div><!-- /.box-body -->
</div><!-- /.box -->
                </form>
            

         
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
     