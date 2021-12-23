<div class="row">
        <div class="col-xs-12">
          <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
            <?php 
// Error input Trigger Alert
echo validation_errors('<div class="alert alert-warning">', '</div>');

echo form_open_multipart(base_url('admin/admin/simpan_data'));
 ?>
<section class="content">
      <div class="row">
          <!-- general form elements -->
          <script>   
              $('#notifications').slideDown('slow').delay(3000).slideUp('slow');
          </script>
          <div id="notifications"><?php echo $this->session->flashdata('msg'); ?></div> 
          <form action="<?php echo base_url().'admin/admin/simpan_data' ?>" method="post" accept-charset="utf-8" enctype="multipart/form-data">
              <div class="box-body">
                <div class="form-group">
                  <label for="id_user">ID User</label>
                  <input type="text" class="form-control" id="id_user" name="id_user" placeholder="Masukan Id User" value="<?php echo $notis ?>" readonly="readonly">
                </div>
                 <div class="form-group">
                  <label for="username">Username</label>
                  <input type="text" class="form-control" id="username" name="username" placeholder="Masukan Username" required>
                </div>
                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" id="password" name="password" placeholder="Masukan Password" required>
                </div>
                <div class="form-group">
                  <label for="nama_user">Nama</label>
                  <input type="text" class="form-control" id="nama_user" name="nama_user" placeholder="Masukan Nama" required>
                </div>
                 <div class="form-group">
                  <label for="fb">Facebook</label>
                  <input type="text" class="form-control" id="fb" name="fb" placeholder="Masukan Link Facebook Anda" required value="#">
                </div>
                 <div class="form-group">
                  <label for="twitter">Twitter</label>
                  <input type="text" class="form-control" id="twitter" name="twitter" placeholder="Masukan Link Twitter Anda" required value="#">
                </div>
                <div class="form-group">
                  <label for="ig">Instagram</label>
                  <input type="text" class="form-control" id="ig" name="ig" placeholder="Masukan Link Instagram Anda" required value="#">
                </div>
                <div class="form-group">
                  <label for="id_level">Hak Akses</label>
                  <select class="form-control" name="id_level" id="id_level">
                    <?php foreach($level as $level) { ?>
                    <option value="<?php echo $level->id_level ?>"><?php echo $level->id_level." - ".$level->nama_level ?></option>
                    <?php } ?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Foto input</label>
                  <input type="file" id="filefoto" name="filefoto" required>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <center><button type="submit" class="btn btn-primary">Tambah</button>&nbsp;&nbsp;&nbsp;<button type="reset" class="btn btn-primary">Reset</button></center>
              </div>
          </form>
      </div>
</section>
          <!-- /.box -->
          
</div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>


            <?php 
echo form_close();
  ?>