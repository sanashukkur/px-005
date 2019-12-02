

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
             <form role="form" method="post" action="<?php echo base_url();?>update-contact" enctype="multipart/form-data">
                  <div class="box">
                  <div class="box-body">
                  <div class="row">
                  <div class="form-group col-md-6">
                      <label>Address</label>
                      <input type="hidden" id="idval" name="idval" value="<?php  echo $value[0]->id; ?>"/>
                     <textarea class="form-control" maxlength="200" id="address" name="address"  ><?php echo $value[0]->address;?></textarea>
                    </div>
                    <div class="form-group col-md-6">
                      <label>Tele</label>
                      <input type="text" class="form-control" id="tele" name="tele" value='<?php echo $value[0]->tele;?>' >
                    </div>
                    <div class="form-group col-md-6">
                      <label>Mobile</label>
                      <input type="text" class="form-control" id="mobile" name="mobile" value='<?php echo $value[0]->mobile;?>' >
                    </div>
                    <div class="form-group col-md-6">
                      <label>Email</label>
                      <input type="email" class="form-control" id="email" name="email" value='<?php echo $value[0]->email;?>' >
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
     