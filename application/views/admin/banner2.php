

      <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
         
         
        </section>

        <!-- Main content -->
        <section class="content">
          <!-- Small boxes (Stat box) -->
         
             <!-- form start -->
             <form role="form" method="post" action="<?php echo base_url();?>update-banner2" enctype="multipart/form-data">
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
                      <input type="text" class="form-control" id="content" name="content" value='<?php echo $value[0]->content;?>' >
                    </div>
                    <div class="form-group col-md-6">
                      <label>Description</label>
                      <textarea class="form-control" maxlength="200"  id="description" name="description"  ><?php echo $value[0]->description;?></textarea>
                    </div>
                    <div class="form-group col-md-6">
                      <label>Icon Style1</label>
                      <input type="text" class="form-control" id="icon1" name="icon1" value='<?php echo $value[0]->iconstyle1;?>'>
                    </div>
                    <div class="form-group col-md-6">
                      <label>Icon Heading1</label>
                      <input type="text" class="form-control" id="heading1" name="heading1" value='<?php echo $value[0]->iconheading1;?>'>
                    </div>
                    <div class="form-group col-md-6">
                      <label>Icon Style2</label>
                      <input type="text" class="form-control" id="icon2" name="icon2" value='<?php echo $value[0]->iconstyle2;?>' >
                    </div>
                    <div class="form-group col-md-6">
                      <label>Icon Heading2</label>
                      <input type="text" class="form-control" id="heading2" name="heading2" value='<?php echo $value[0]->iconheading2;?>' >
                    </div>
                    <div class="form-group col-md-6">
                      <label>Icon Style3</label>
                      <input type="text" class="form-control" id="icon3" name="icon3" value='<?php echo $value[0]->iconstyle3;?>'>
                    </div>
                    <div class="form-group col-md-6">
                      <label>Icon Heading3</label>
                      <input type="text" class="form-control" id="heading3" name="heading3" value='<?php echo $value[0]->iconheading3;?>'>
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
     