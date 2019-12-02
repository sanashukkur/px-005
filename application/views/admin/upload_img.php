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
        <div>
        <h3>Select an image from your computer and upload it to the cloud</h3>
        <?php
                if (isset($error)){
                    echo $error;
                }
            ?>
            <form method="post" action="<?=base_url('store-img')?>" enctype="multipart/form-data">
                <input type="file" id="profile_image" name="profile_image" size="33" />
                <input type="submit" value="Upload Image" />
            </form>
    </div>
          <!-- Small boxes (Stat box) -->
          </div><!-- /.box -->

         
</section><!-- /.content -->
</div><!-- /.content-wrapper -->
