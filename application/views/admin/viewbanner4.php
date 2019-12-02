

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
             <form role="form" method="post" action="" enctype="multipart/form-data">
                  			
	<table class="table datatable-pagination">
						<thead>
							<tr>
                            <th class="text-center">ID</th>
                            <th class="text-center">image</th>
                                <th class="text-center">Title</th>
                                <th class="text-center">Content</th>
                                <th class="text-center">Action</th>
							</tr>
						</thead>
						<tbody>
						<?php 

foreach ($value as $key => $value) { 
  
	?>
							<tr>
						
								<td class="text-center"><?php echo $value->id;?></td>
                                <td class="text-center"><img src="<?php echo base_url().'assets/admin/image/'.$value->img; ?>" class="img-responsive"></td>
                                <td class="text-center"><?php echo $value->content;?></td>
                <td class="text-center"><?php echo$value->footercontent;?></td>
								<td class="text-center"><a  href="<?php echo base_url();?>update-banner-data?id=<?php echo $value->id;?>"><i class="fa fa-edit"></i></a></td>
								
								
							</tr>
							
							<?php
}
?>

						</tbody>
					</table>
                </form>
            
             
         
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
     