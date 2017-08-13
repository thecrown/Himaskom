<section class="content-header">
      <h1>
        Surat
        <small>Update Surat to Database</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Surat</li>
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
            <?php if(isset($surat)){ ?>
            <?php foreach ($surat as $data) {?>
            <?php echo form_open_multipart('admin_5/verifikasi_update_surat/'.$data['idsurat']);?>
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Judul Surat :</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $data['judul_surat']; ?>" name="judul_surat" placeholder="Judul Surat">
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">File input :</label>
                  <input type="file" name="file_surat" required id="exampleInputFile">
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
                    <label>Tahun :</label>
                    <div class="input-group">
                    <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                    </div>
                    <input type="date" name="tanggal" class="form-control" value="<?php echo $data['tanggal']; ?>" placeholder="dd-mm-yyyy">
                    </div>
                </div>
                <div class="form-group">
                  <label>Keterangan :</label>
                  <textarea class="form-control" name="keterangan" rows="3" placeholder="Enter ..."><?php echo $data['keterangan']; ?></textarea>
                </div>
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