

      <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
         
        </section>

        <!-- Main content -->
        <section class="content">
          <!-- Small boxes (Stat box) -->
         
             <!-- form start -->
             <form role="form" method="post" action="<?php echo base_url();?>update-banner3" enctype="multipart/form-data">
                  <div class="box">
                  <div class="box-body">
                  <div class="row">

                    <div class="form-group col-md-6" >
                      <label>Icon 1</label>
                      <input type="hidden" id="idval" name="idval" value="<?php  echo $value[0]->id; ?>"/>
                      <input type="text" class="form-control required" required id="icon1"  name="icon1" value='<?php echo $value[0]->iconstyle1;?>'>
                    </div>
                    <div class="form-group col-md-6" >
                      <label>Icon Title 1</label>
                      <input type="text" class="form-control required" required id="icontitle1"  name="icontitle1" value='<?php echo $value[0]->icontitle1;?>'>
                    </div>
                    <div class="form-group col-md-6">
                      <label>Icon 2</label>
                      <input type="text" class="form-control  required" id="icon2" name="icon2" value='<?php echo $value[0]->iconstyle2;?>'>
                    </div>
                    <div class="form-group col-md-6">
                      <label>Icon Title 2</label>
                      <input type="text" class="form-control" id="icontitle2" name="icontitle2" value='<?php echo $value[0]->icontitle2;?>'>
                    </div>
                    <div class="form-group col-md-6">
                      <label>Icon 3</label>
                      <input type="text" class="form-control" id="icon3"  name="icon3" value='<?php echo $value[0]->iconstyle3;?>'>
                    </div>
                    <div class="form-group col-md-6">
                      <label>Icon Title 3</label>
                      <input type="text" class="form-control" id="icontitle3" name="icontitle3" value='<?php echo $value[0]->icontitle3;?>'>
                    </div>
                    <div class="form-group col-md-6">
                      <label>Icon 4</label>
                      <input type="text" class="form-control" id="icon4" name="icon4" value='<?php echo $value[0]->iconstyle4;?>'>
                    </div>
                    <div class="form-group col-md-6">
                      <label>Icon Title 4</label>
                      <input type="text" class="form-control" id="icontitle4" name="icontitle4" value='<?php echo $value[0]->icontitle4;?>'>
                    </div>
                    <div class="form-group col-md-6">
                      <label>Icon 5</label>
                      <input type="text" class="form-control" id="icon5" name="icon5" value='<?php echo $value[0]->iconstyle5;?>'>
                    </div>
                    <div class="form-group col-md-6">
                      <label>Icon Title 5</label>
                      <input type="text" class="form-control" id="icontitle5" name="icontitle5" value='<?php echo $value[0]->icontitle5;?>'>
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
     