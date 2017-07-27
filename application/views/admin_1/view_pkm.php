<section class="content-header">
      <h1>
        Ristek
        <small>View All Data PKM From Database</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Dashboard</a></li>
        <li class="active">PKM</li>
      </ol>
    </section>
    
<section class="content">
      
      <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>no</th>
                  <th>Judul PKM</th>
                  <th>Jenis</th>
                  <th>Penulis</th>
                  <th>Tahun</th>
                  <th>File</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php $no = 1; ?>
                <?php if(isset($PKM)){ ?>
                <?php foreach($PKM as $data){ ?>
                <tr>
                  <td><?php echo $no; ?></td>
                  <td><?php echo $data['judul_pkm']; ?></td>
                  <td><?php echo $data['Jenis']; ?></td>
                  <td><?php echo $data['Penulis']; ?></td>
                  <td><?php echo $data['Tahun']; ?></td>
                  <td><?php echo $data['File']; ?></td>
                  <td><a href="<?php echo base_url('admin_1/delete_pkm/'); echo $data['idPKM'];?>"><button class="btn btn-danger"><i class="fa fa-trash bigicon"></i></button></a>&nbsp;&nbsp;&nbsp;<a href="<?php echo base_url('admin_1/update/'); echo $data['idPKM']; ?>"><button class="btn btn-primary"><i class="fa fa-upload bigicon"></i></button></a>&nbsp;&nbsp;&nbsp;<a href="<?php echo base_url('assets/file/pkm/'); echo $data['File']; ?>" target="_blank"><button class="btn btn-info"><i class="fa fa-download bigicon"></i></button></a></td>
                  <?php $no++; ?>
                </tr>
                <?php }} ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>no</th>
                  <th>Judul PKM</th>
                  <th>Jenis</th>
                  <th>Penulis</th>
                  <th>Tahun</th>
                  <th>File</th>
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