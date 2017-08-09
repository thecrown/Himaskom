<section class="content-header">
      <h1>
        Kesma
        <small>Add Beasiswa to Database</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Dashboard</a></li>
        <li class="active">Kesma</li>
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
            <?php if(isset($beasiswa)){ ?>
            <?php foreach ($beasiswa as $data){ ?>
            <?php echo form_open('admin_7/verifikasi_update_beasiswa/'.$data['idBeasiswa']);?>
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputPassword1">Penerima Beasiswa</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" value="<?php echo $data['penerima']; ?>" name="Penerima" placeholder="Penerima Beasiswa">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Jenis Beasiswa</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $data['nama_beasiswa']; ?>" name="Nama_beasiswa" placeholder="Nama Beasiswa">
                </div>
                <div class="form-group">
                <label for="exampleInputPassword1">Besar(Rp) :</label>
                  <input type="text" class="form-control" id="exampleInputPassword1"  value="<?php echo $data['Besar']; ?>" name="Besar" placeholder="Besar Nominal">
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
                    <input type="date" name="Tahun"  value="<?php echo $data['Tahun']; ?>"  class="form-control" placeholder="dd-mm-yyyy">
                    </div>
                    <!-- /.input group -->
                </div>
                <?php }} ?>
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