

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
             <form role="form" method="post" action="<?php echo base_url();?>insert-services-data" enctype="multipart/form-data">
                  <div class="box">
                  <div class="box-body">
                  <div class="row">
                  <div class="form-group col-md-6">
                      <label>Image</label>
                      <input type="file" id="Image" class="form-control" name="Image">
                                  
                    </div>
                    <div class="form-group col-md-6" >
                      <label>Heading</label>
                      <input type="text" class="form-control required" required id="heading"  name="heading">
                    </div>
                   
                  
                    <div class="form-group col-md-6">
                      <label>content</label>
                     <textarea class="form-control required"  maxlength="1000" id="content" name="content" ></textarea>
                    </div>
                    <div class=" col-md-12" >
                    <button type="submit" class="btn btn-success">Submit</button>
                    </div>
                  </div>

                  
</div><!-- /.box-body -->
</div><!-- /.box -->
                </form>
            
                <a href="<?php echo base_url();?>view-services" type="button" class="btn btn-primary">View </a>
         
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
     