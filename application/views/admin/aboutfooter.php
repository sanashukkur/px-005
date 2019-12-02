

      <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
          Add Banner
            <small></small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <!-- Small boxes (Stat box) -->
         
             <!-- form start -->
             <form role="form" method="post" action="<?php echo base_url();?>update-about" enctype="multipart/form-data">
                  <div class="box">
                  <div class="box-body">
                  <div class="row">
                 
                    <div class="form-group col-md-6" >
                      <label>Title</label>
                      <input type="hidden" id="idval" name="idval" value="<?php  echo $value[0]->id; ?>"/>
                      <input type="text" class="form-control required" required id="title"  name="title" value='<?php echo $value[0]->title;?>' >
                    </div>
            
                    <div class="form-group col-md-6">
                      <label>Content</label>
                     <textarea class="form-control" maxlength="100" id="content" name="content" ><?php echo $value[0]->content;?> </textarea>
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
     