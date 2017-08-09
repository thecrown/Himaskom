<section class="content-header">
      <h1>
        PPMB
        <small>Add Mahasiswa to Database</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Dashboard</a></li>
        <li class="active">PPMB</li>
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
            <?php echo form_open('admin_8/verifikasi_mahasiswa/');?>
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputPassword1">Nama :</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" name="Nama" placeholder="Nama">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Jalur Masuk :</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="Jalur_Masuk" placeholder="Jalur Masuk">
                </div>
                <div class="form-group">
                <label for="exampleInputPassword1">Alamat kos :</label>
                  <textarea class="form-control" name="Alamat_kos" rows="3" placeholder="Enter ..."></textarea>
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
                <!-- select -->
                <div class="form-group">
                    <label for="exampleInputPassword1">No Hp :</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="No_hp" placeholder="No Hp">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email :</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="Email" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Alamat Rumah :</label>
                    <textarea class="form-control" name="Alamat_Rumah" rows="3" placeholder="Enter ..."></textarea>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Keterangan :</label>
                    <textarea class="form-control" name="Keterangan" rows="3" placeholder="Enter ..."></textarea>
                </div>
                    <!-- /.input group -->
                </div>
                <!-- /.form group -->
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