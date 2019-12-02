

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
             <form role="form" method="post" action="<?php echo base_url();?>add-settings" enctype="multipart/form-data">
                  <div class="box">
                  <div class="box-body">
                  <div class="row">
                  <div class="form-group col-md-6">
                      <label>Logo</label>
                      <input type="file" id="logo" class="form-control"  name="logo"><img src="<?php echo base_url().'assets/admin/image/'.$settings[0]->logo; ?>" class="img-responsive">
                     <input type="hidden" id="idval" name="idval" value="<?php  echo $settings[0]->id; ?>"/>
                     <input type="hidden" id="imageval" name="imageval" value="<?php  echo $settings[0]->logo; ?>"/>
                    </div>
                    <div class="form-group col-md-6" >
                      <label>Twitter</label>
                      <input type="text" class="form-control required" value='<?php echo $settings[0]->twitter_url;?>' required id="twitter"  name="twitter" placeholder="Enter twitter url">
                    </div>
                    <div class="form-group col-md-6">
                      <label>Pinterest</label>
                      <input type="text" class="form-control" value='<?php echo $settings[0]->pinterest_url;?>' id="pinterest" name="pinterest" placeholder="enter pinterest url">
                    </div>
                    <div class="form-group col-md-6">
                      <label>Facebook</label>
                      <input type="text" class="form-control"   value='<?php echo $settings[0]->facebook_url;?>' id="facebook"  name="facebook" placeholder="Enter facebook url">
                    </div>
                    <div class="form-group col-md-6">
                      <label>Youtube</label>
                      <input type="text" class="form-control"  value='<?php echo $settings[0]->youtube_url;?>' id="youtube" name="youtube" placeholder="enter youtube url">
                    </div>
                    <div class="form-group col-md-6">
                      <label>Tele</label>
                      <input type="text" class="form-control"  value='<?php echo $settings[0]->company_tele;?>' id="tele" name="tele" placeholder="enter telephone number">
                    </div>
                    <div class="form-group col-md-6">
                      <label>Mobile</label>
                      <input type="text" class="form-control"  value='<?php echo $settings[0]->company_mob;?>' id="mobile" name="mobile"  placeholder="enter mobile number">
                    </div>
                    <div class="form-group col-md-6">
                      <label>Email</label>
                      <input type="email" class="form-control"  value='<?php echo $settings[0]->company_email;?>' id="email" name="email"  placeholder="enter email">
                    </div>
                    <div class="form-group col-md-6">
                      <label>Address</label>
                     <textarea class="form-control"  maxlength="150"  id="address" name="address"  placeholder="enter address"> <?php echo $settings[0]->company_address;?></textarea>
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
     