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
	<a href="<?php echo base_url('admin/banner/tambah') ?>" class="btn btn-success btn-lg">
		<i class="fa fa-plus"></i> Tambah Banner
	</a>
</p>
<table id="example1" class="table table-bordered table-striped">
	<thead>
		<tr>
		  <th>NO</th>
		  <th>ID Banner</th>
		  <th>Nama Banner</th>
		  <th>Deskripsi</th>
		  <th>AKSI</th>
		</tr>
	</thead>
	<tbody>
		 <?php function limit_words($string, $word_limit){
                                $words = explode(" ",$string);
                                return implode(" ",array_splice($words,0,$word_limit));
                            } ?>
		<?php $i = 1; foreach($banner as $banner) { ?>
		<tr>
		  <td><?php echo $i ?></td>
		  <td><?php echo $banner->id_banner ?></td>
		  <td><?php echo $banner->nama_banner ?></td>
		  <td><?php echo limit_words($banner->keterangan,5)."..."; ?></td>
		  <td>
		  	<a href="<?php echo base_url('admin/banner/edit/').$banner->id_banner ?>" class="btn btn-warning btn-xs"><i class="fa fa-edit"></i> Edit</a>
		  	<a href="<?php echo base_url('admin/banner/hapus/').$banner->id_banner ?>" class="btn btn-danger btn-xs" onclick="return confirm('Yakin Ingin Menghapus data ini ? ')"><i class="fa fa-trash-o"></i> Hapus</a>
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

