

      <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
          view banner
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
             <form role="form" method="post" action="" enctype="multipart/form-data">
                  			
	<table class="table datatable-pagination">
						<thead>
							<tr>
                            <th>ID</th>
                                <th>Title</th>
                                <th>Content</th>
                                <th>Action</th>
							</tr>
						</thead>
						<tbody>
						<?php 

foreach ($value as $key => $value) { 
  
	?>
							<tr>
							
				

					
								<td><?php echo $value->id;?></td>
								<td><?php echo $value->banner_title;?></td>
                                <td><?php echo $value->banner_content;?></td>
								<td><span class="badge badge-success"></span></td>
								<td class="text-center">
									<div class="list-icons">
									
<a id="clientedit" href="<?php echo base_url();?>update-banner-title"> <i class="icon-pencil7 mr-3"></i></a>
								</td>
								
		
							</tr>
							
							<?php
}
?>

						</tbody>
					</table>
                </form>
            
             
         
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
     