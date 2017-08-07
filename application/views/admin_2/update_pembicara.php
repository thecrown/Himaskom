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
            <?php if(isset($pembicara)){ ?>
            <?php foreach ($pembicara as $data) {?>
            <?php echo form_open('admin_2/verifikasi_update_pembicara/'.$data['idpembicara']);?>
              <div class="box-body">
                <div class="form-group">
                  <label for="exampleInputEmail1">Nama </label>
                  <input type="text" class="form-control" id="exampleInputEmail1" name="nama" value="<?php echo $data['nama']; ?>" placeholder="Nama">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Kontak</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" name="Kontak" value="<?php echo $data['kontak']; ?>" placeholder="Kontak">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Email</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" name="email" value="<?php echo $data['email']; ?>"  placeholder="Email">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Alamat</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" name="alamat" value="<?php echo $data['alamat']; ?>" placeholder="Alamat">
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
                <label for="exampleInputPassword1">Keterangan</label>
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