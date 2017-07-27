<section class="content-header">
      <h1>
        Ristek
        <small>Update BANK SOAL to Database</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">BANK SOAL</li>
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
            <?php if(isset($soal)){ ?>
            <?php foreach ($soal as $data){ ?>
            <?php echo form_open_multipart('admin_1/verifikasi_update/'.$data['idBank_soal']);?>
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Mata kuliah</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $data['matkul']; ?>" name="matkul" placeholder="Mata Kuliah">
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">File input</label>
                  <input type="file" name="file_soal" required id="exampleInputFile">
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
                  <label>Keterangan</label>
                  <textarea class="form-control" name="keterangan" rows="3" placeholder="Enter ..."><?php echo $data['Keterangan']; ?></textarea>
                </div>
                <div class="form-group">
                    <label>Tahun :</label>

                    <div class="input-group">
                    <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                    </div>
                    <input type="date" name="date" value="<?php echo $data['Tahun']; ?>" class="form-control" placeholder="Tahun soal">
                    </div>
                    <!-- /.input group -->
                </div>
                <!-- /.form group -->
              <?php echo form_close(); ?>
              <?php echo validation_errors(); ?>
              <?php if(isset($message))
              {echo $message;} ?>
            </div>
            <?php }} ?>
            <!-- /.box-body -->
          </div>
        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>