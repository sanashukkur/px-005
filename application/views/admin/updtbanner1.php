

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
             <form role="form" method="post" action="<?php echo base_url();?>update-banner-title" enctype="multipart/form-data">
                  <div class="box">
                  <div class="box-body">
                  <div class="row">
                 
                    <div class="form-group col-md-6" >
                      <label>Title</label>
                      <input type="hidden" id="idval" name="idval" value="<?php  echo $value[0]->id; ?>"/>
                      <input type="text" class="form-control required" required id="title"  name="title"  value="<?php  echo $value[0]->banner_title; ?>">
                    </div>
            
                    <div class="form-group col-md-6">
                      <label>Content</label>
                     <textarea class="form-control"  id="content" name="content"  placeholder="enter address"> <?php echo $value[0]->banner_content;?> </textarea>
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
     