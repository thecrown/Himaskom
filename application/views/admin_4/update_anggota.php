<section class="content-header">
      <h1>
        Ekobis
        <small>Add Wirausaha to Database</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Ekobis</li>
      </ol>
</section>

<section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-6">
          <!-- general form elements -->
          <div class="box box-primary">
            <!-- /.box-header -->
            <!-- form start -->
            <?php if(isset($anggota)){ ?>
            <?php foreach($anggota as $data){ ?>
            <?php echo form_open('admin_4/verifikasi_update_anggota_pengurus/'.$data['idAnggota_kepengurusan']);?>
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama staff :</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $data['Nama_staff']; ?>" name="nama" placeholder="Nama Staff">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Penilaian :</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" value="<?php echo $data['Penilaian']; ?>" name="Penilaian" placeholder="Penilaian">
                </div>
                <div class="form-group">
                <label for="exampleInputPassword1"> Alamat :</label>
                  <textarea class="form-control" name="Alamat" rows="3" placeholder="Enter ..."><?php echo $data['Alamat']; ?></textarea>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            
          </div>
        </div>
        <!--/.col (left) -->
        <!-- right column -->
        <div class="col-md-6">
        <div class="box box-warning">
            <!-- /.box-header -->
            <div class="box-body">
                <div class="form-group">
                  <label>Bidang :</label>
                  <select class="form-control" name="bidang">
                    <option value="1" <?php if($data['Bidang'] =="1"){echo "selected"; }?>>Ristek</option>
                    <option value="2" <?php if($data['Bidang'] =="2"){echo "selected"; }?>>Infokom</option>
                    <option value="3" <?php if($data['Bidang'] =="3"){echo "selected"; }?>>Ekobis</option>
                    <option value="4" <?php if($data['Bidang'] =="4"){echo "selected"; }?>>Organisasi</option>
                    <option value="7" <?php if($data['Bidang'] =="7"){echo "selected"; }?>>Kesma</option>
                    <option value="8" <?php if($data['Bidang'] =="8"){echo "selected"; }?>>PPMB</option>
                  </select>
                </div>
                <!-- select -->
                <div class="form-group">
                    <label for="exampleInputPassword1"> Keterangan :</label>
                    <textarea class="form-control" name="Keterangan" rows="3" placeholder="Enter ..."><?php echo $data['Keterangan']; ?></textarea>
                </div>
                <!-- /.form group -->
                <?php }} ?>
              <?php echo form_close(); ?>
              <?php echo validation_errors(); ?>
              <?php if(isset($message))
              {echo $message;} ?>
            </div>
            <!-- /.box-body -->
          </div>
        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>