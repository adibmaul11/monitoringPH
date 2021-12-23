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
	
	<a href="<?php echo base_url('admin/profil/tambah') ?>" class="btn btn-success btn-lg">
		<i class="fa fa-plus"></i> Tambah Profil
	</a>
</p>
<table id="example1" class="table table-bordered table-striped">
	<thead>
		<tr>
		  <th>NO</th>
		  <th>ID Profil</th>
		  <th>Nama Perusahaan</th>
		  <th>No_Telp</th>
		  <th>Email</th>
		  <th>AKSI</th>
		</tr>
	</thead>
	<tbody>
		<?php $i = 1; foreach($profil as $profil) { ?>
		<tr>
		  <td><?php echo $i ?></td>
		  <td><?php echo $profil->id_profil ?></td>
		  <td><?php echo $profil->nama_restoran ?></td>
		  <td><?php echo $profil->no_telp ?></td>
		  <td><?php echo $profil->email ?></td>
		  <td>
		  	<a href="<?php echo base_url('admin/profil/edit/').$profil->id_profil ?>" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i> Edit</a>
		  	<a href="<?php echo base_url('admin/profil/hapus/').$profil->id_profil ?>" class="btn btn-danger btn-xs" onclick="return confirm('Yakin Ingin Menghapus data ini ? ')"><i class="fa fa-trash-o"></i> Hapus</a>
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

