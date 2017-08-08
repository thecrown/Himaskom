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
            <?php echo form_open('admin_3/verifikasi_wirausaha/');?>
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama Wirausahawan</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="Nama_wirausahawan" placeholder="Nama Wirausahwan">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Jenis Usaha</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" name="Jenis" placeholder="Jenis Usaha">
                </div>
                <div class="form-group">
                <label for="exampleInputPassword1">Lokasi / Alamat :</label>
                  <textarea class="form-control" name="Lokasi" rows="3" placeholder="Enter ..."></textarea>
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
                    <label>Tahun :</label>

                    <div class="input-group">
                    <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                    </div>
                    <input type="date" name="Tahun" class="form-control" placeholder="dd-mm-yyyy">
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