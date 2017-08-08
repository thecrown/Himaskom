<section class="content-header">
      <h1>
        Ekobis
        <small>Show Wirausahawan from Database</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
        <li class="active">Ekobis</li>
      </ol>
</section>

<section class="content">
      
      <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Beasiswa</th>
                  <th>Penerima</th>
                  <th>Tahun</th>
                  <th>Besar/Rp</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php $no = 1; ?>
                <?php if(isset($beasiswa)){ ?>
                <?php foreach($beasiswa as $data){ ?>
                <tr>
                  <td><?php echo $no; ?></td>
                  <td><?php echo $data['nama_beasiswa']; ?></td>
                  <td><?php echo $data['penerima']; ?></td>
                  <td><?php echo $data['Tahun']; ?></td>
                  <td>Rp<?php echo $data['Besar']; ?>,00-</td>
                  <td><a href="<?php echo base_url('admin_7/delete_beasiswa/'); echo $data['idBeasiswa'];?>"><button class="btn btn-danger"><i class="fa fa-trash bigicon"></i></button></a>&nbsp;&nbsp;&nbsp;<a href="<?php echo base_url('admin_7/update_beasiswa/'); echo $data['idBeasiswa']; ?>"><button class="btn btn-primary"><i class="fa fa-upload bigicon"></i></button></a></td>
                  <?php $no++; ?>
                </tr>
                <?php }} ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>No</th>
                  <th>Beasiswa</th>
                  <th>Penerima</th>
                  <th>Tahun</th>
                  <th>Besar/Rp</th>
                  <th>Action</th>
                </tr>
                </tfoot>
              </table>
              <?php if(isset($message))
              {echo $message;} ?>
            </div>
            <!-- /.box-body -->
          </div>
    </section>