<div class="row">
        <div class="col-xs-12">
          <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
<script>   
    $('#notifications').slideDown('slow').delay(3000).slideUp('slow');
</script>
          <div id="notifications"><?php echo $this->session->flashdata('msg_list'); ?></div> 
<p>
	<a href="<?php echo base_url('admin/admin/tambah') ?>" class="btn btn-success btn-lg">
		<i class="fa fa-plus"></i> Tambah Admin
	</a>
</p>
<table id="example1" class="table table-bordered table-striped">
	<thead>
		<tr>
		  <th>NO</th>
		  <th>USERNAME</th>
		  <th>NAMA</th>
		  <th>HAK AKSES</th>
		  <th>AKSI</th>
		</tr>
	</thead>
	<tbody>
		<?php $i = 1; foreach($admin as $admin) { ?>
		<tr>
		  <td><?php echo $i ?></td>
		  <td><?php echo $admin->username ?></td>
		  <td><?php echo $admin->nama_user ?></td>
		  <td><?php echo $admin->nama_level ?></td>
		  <td>
		  	<a href="<?php echo base_url('admin/admin/edit/').$admin->id_user ?>" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i> Edit</a>
		  	<a href="<?php echo base_url('admin/admin/hapus/').$admin->id_user ?>" class="btn btn-danger btn-xs" onclick="return confirm('Yakin Ingin Menghapus data ini ? ')" ><i class="fa fa-trash-o"></i> Hapus</a>
		  </td>
		</tr>
		<?php $i++; } ?> 
	</tbody>
</table>
</div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>

