<section class="content-header">
      <h1>
        Ristek
        <small>Add PKM to Database</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">PKM</li>
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
            <?php echo form_open_multipart('admin_1/verifikasi_PKM/');?>
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Judul PKM</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="judul" placeholder="Judul PKM">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Penulis</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" name="penulis" placeholder="Penulis">
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">File input</label>
                  <input type="file" name="file_pkm" required id="exampleInputFile">
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
                  <label>Jenis PKM</label>
                  <select class="form-control" name="jenis">
                    <option value="PKM-KC">PKM-KC</option>
                    <option value="PKM-M">PKM-M</option>
                    <option value="PKM-P">PKM-P</option>
                    <option value="PKM-W">PKM-K</option>
                    <option value="PKM-T">PKM-T</option>
                  </select>
                </div>
                <div class="form-group">
                    <label>Tahun :</label>

                    <div class="input-group">
                    <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                    </div>
                    <input type="date" name="date" class="form-control" placeholder="dd-mm-yyyy">
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