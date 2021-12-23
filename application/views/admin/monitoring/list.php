<div class="right_col" role="main">
          <div class="">
            

            <div class="clearfix"></div>

            <div class="row">
<div class="col-md-12 col-sm-12 ">
                <div class="x_panel">
                  <div class="x_title">
					<h2><?php echo $title ?></h2>
					
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                      <div class="row">
                          <div class="col-sm-12">
                            <div class="card-box table-responsive">
						
                    <table id="datatable-buttons" class="table table-striped table-bordered" style="width:100%">
                      <thead>
					  <tr>
		  <th>NO</th>
      <th>Tanggal</th>
		  <th>PH</th>
		  <th>Suhu</th>
		  <th>AKSI</th>
		</tr>
                      </thead>


                      <tbody>
					  <?php $i = 1; foreach($monitoring as $monitoring) { ?>
		<tr>
		  <td><?php echo $i ?></td>
      <td><?php echo $monitoring->tanggal_masuk ?></td>
		  <td><?php echo $monitoring->mon_ph .' ppm' ?></td>
		  <td><?php echo $monitoring->mon_suhu .'°'?></td>
		  

		  <td>
		  	<a href="<?php echo base_url('monitoring/hapus/').$monitoring->id_monit ?>" class="btn btn-danger btn-xs" onclick="return confirm('Yakin Ingin Menghapus data ini ? ')"><i class="fa fa-trash-o"></i> Hapus</a>
		  </td>
		</tr>
		<?php $i++; } ?> 
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
                </div>
			  </div>
					  </div>
					  </div>
					  </div>
					  </div>

              