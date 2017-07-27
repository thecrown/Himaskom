<section class="content-header">
      <h1>
        Ristek
        <small>Update PKM to Database</small>
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
            <?php if(isset($PKM)){ ?>
            <?php foreach($PKM as $data){ ?>
            <?php echo form_open_multipart("admin_1/do_update/".$data['idPKM']);?>
              <div class="box-body">    
                <div class="form-group">
                  <label for="exampleInputEmail1">Judul PKM</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $data['judul_pkm'];?>" name="judul" placeholder="Judul PKM">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Penulis</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" value="<?php echo $data['Penulis'];?>" name="penulis" placeholder="Penulis">
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
                    <option value="PKM-KC" <?php if($data['Jenis'] =="PKM-KC"){echo "selected"; }?>>PKM-KC</option>
                    <option value="PKM-M" <?php if($data['Jenis'] =="PKM-M"){echo "selected"; }?>>PKM-M</option>
                    <option value="PKM-P" <?php if($data['Jenis'] =="PKM-P"){echo "selected"; }?>>PKM-P</option>
                    <option value="PKM-W" <?php if($data['Jenis'] =="PKM-K"){echo "selected"; }?>>PKM-K</option>
                    <option value="PKM-T" <?php if($data['Jenis'] =="PKM-T"){echo "selected"; }?>>PKM-T</option>
                  </select>
                  <?php }}?>
                </div>
                <div class="form-group">
                    <label>Tahun :</label>

                    <div class="input-group">
                    <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                    </div>
                    <input type="date" name="date" value="<?php echo $data['Tahun'];?>" class="form-control" placeholder="dd-mm-yyyy">
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