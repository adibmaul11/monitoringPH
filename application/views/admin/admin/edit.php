<div class="row">
        <div class="col-xs-12">
          <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
<section class="content">
      <div class="row">
          <!-- general form elements -->
                      <?php 
// Error input Trigger Alert
echo validation_errors('<div class="alert alert-warning">', '</div>');

echo form_open_multipart(base_url('admin/admin/simpan_edit'));
 ?>
              <div class="box-body">
                <?php foreach($tampil as $tampil) { ?>
                <div class="form-group">
                  <label for="id_user">ID User</label>
                  <input type="text" class="form-control" id="id_user" name="id_user" placeholder="Masukan Id User" value="<?php echo $tampil->id_user ?>" readonly="readonly">
                </div>
                <div class="form-group">
                  <label for="username">Username</label>
                  <input type="text" class="form-control" id="username" name="username" placeholder="Masukan Username" value="<?php echo $tampil->username ?>">
                </div>
                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" id="password" name="password" placeholder="Masukan Password">
                </div>
                <div class="form-group">
                  <label for="nama_user">Nama</label>
                  <input type="text" class="form-control" id="nama_user" name="nama_user" placeholder="Masukan Nama" value="<?php echo $tampil->nama_user ?>">
                </div>
                <div class="form-group">
                  <label for="fb">Facebook</label>
                  <input type="text" class="form-control" id="fb" name="fb" placeholder="Masukan Link Facebook Anda" required value="<?php echo $tampil->fb ?>">
                </div>
                 <div class="form-group">
                  <label for="twitter">Twitter</label>
                  <input type="text" class="form-control" id="twitter" name="twitter" placeholder="Masukan Link Twitter Anda" required value="<?php echo $tampil->twitter ?>">
                </div>
                <div class="form-group">
                  <label for="ig">Instagram</label>
                  <input type="text" class="form-control" id="ig" name="ig" placeholder="Masukan Link Instagram Anda" required value="<?php echo $tampil->ig ?>">
                </div>
                <div class="form-group">
                  <label for="level">Hak Akses</label>
                  <select class="form-control" name="id_level" id="id_level" value="<?php echo $tampil->id_level ?>">
                    <?php foreach($level as $level) { ?>
                    <option value="<?php echo $level->id_level ?>" <?php if($level->id_level==$tampil->id_level){echo "selected";} ?>><?php echo $level->id_level." - ".$level->nama_level ?></option>
                    <?php } ?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">Foto input</label>
                  <input type="file" id="filefoto" name="filefoto" value="<?php echo $tampil->foto ?>">
                </div>
                <?php } ?>
              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                <center><button type="submit" class="btn btn-primary">Ubah</button></center>
              </div>
                     <?php 
echo form_close();
  ?>     
      </div>
</section>
</div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>


          <!-- /.box -->
