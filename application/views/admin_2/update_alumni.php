<section class="content-header">
      <h1>
        Infokom
        <small>Add Sponsor to Database</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Dashboard</a></li>
        <li class="active">Sponsor</li>
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
            <?php if(isset($alumni)){ ?>
            <?php foreach ($alumni as $data){?>
            <?php echo form_open('admin_2/verifikasi_update_alumni/'.$data['idAlumni']);?>
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama </label>
                  <input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $data['nama']; ?>" name="Nama" placeholder="Nama">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">NIM</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" value="<?php echo $data['nim']; ?>" name="NIM" placeholder="NIM">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Angkatan</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $data['Angkatan']; ?>" name="Angkatan" placeholder="Angkatan">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Pekerjaan</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" value="<?php echo $data['Pekerjaan']; ?>" name="Pekerjaan" placeholder="Pekerjaan">
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
                <label for="exampleInputPassword1">Alamat</label>
                  <textarea class="form-control" name="Alamat" rows="3" placeholder="Enter ..."><?php echo $data['Alamat']; ?></textarea>
                </div>
              <?php echo form_close(); ?>
              <?php echo validation_errors(); ?>
              <?php if(isset($message))
              {echo $message;} ?>
            </div>
            <?php }}?>
            <!-- /.box-body -->
          </div>
        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </section>