

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
             <form role="form" method="post" action="<?php echo base_url();?>insert-banner-data" enctype="multipart/form-data">
                  <div class="box">
                  <div class="box-body">
                  <div class="row">
                  <div class="form-group col-md-6">
                      <label>Banner Image</label>
                      <input type="file" id="img" class="form-control required"  name="img"> 
                     
                    </div>
                    <div class="form-group col-md-6" >
                      <label>Content</label>
                      <input type="text" class="form-control required"   id="content"  name="content" placeholder="Enter content">
                    </div>
                    <div class="form-group col-md-6">
                      <label>footer Content</label>
                      <input type="text" class="form-control required"  id="footercontent" name="footercontent" placeholder="enter footercontent">
                    </div>
                   
                    <div class=" col-md-12" >
                    <button type="submit" class="btn btn-success">Add</button>
                    </div>
                  </div>

                  
</div><!-- /.box-body -->
</div><!-- /.box -->
                </form>
            
                <a href="<?php echo base_url();?>show-banner-details" type="button" class="btn btn-primary">View </a>
         
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
     