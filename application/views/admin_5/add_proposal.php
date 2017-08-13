<section class="content-header">
      <h1>
        Proposal
        <small>Add Proposal to Database</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Proposal</li>
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
            <?php echo form_open_multipart('admin_5/verifikasi_proposal/');?>
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Judul Proposal :</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="judul_proposal" placeholder="Judul Proposal">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">No Proposal :</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="no_proposal" placeholder="No Proposal">
                </div>
                <div class="form-group">
                  <label for="exampleInputFile">File input :</label>
                  <input type="file" name="file_proposal" required id="exampleInputFile">
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
                  <select class="form-control" name="idbidang">
                    <option value="1">Ristek</option>
                    <option value="2">Infokom</option>
                    <option value="3">Ekobis</option>
                    <option value="4">Organisasi</option>
                    <option value="7">Kesma</option>
                    <option value="8">PPMB</option>
                  </select>
                </div>
                <div class="form-group">
                  <label>Keterangan :</label>
                  <textarea class="form-control" name="keterangan" rows="3" placeholder="Enter ..."></textarea>
                </div>
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