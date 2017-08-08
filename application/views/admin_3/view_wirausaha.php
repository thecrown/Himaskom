<section class="content-header">
      <h1>
        Infokom
        <small>View All Data Pembicara From Database</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Dashboard</a></li>
        <li class="active">Sponsor</li>
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
                  <th>Nama</th>
                  <th>Jenis Usaha</th>
                  <th>Tahun</th>
                  <th>Alamat/Lokasi</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php $no = 1; ?>
                <?php if(isset($wirausaha)){ ?>
                <?php foreach($wirausaha as $data){ ?>
                <tr>
                  <td><?php echo $no; ?></td>
                  <td><?php echo $data['Nama_wirausahawan']; ?></td>
                  <td><?php echo $data['Jenis']; ?></td>
                  <td><?php echo $data['Tahun']; ?></td>
                  <td><?php echo $data['Lokasi']; ?></td>
                  <td><a href="<?php echo base_url('admin_3/delete_wirausaha/'); echo $data['idWirausaha'];?>"><button class="btn btn-danger"><i class="fa fa-trash bigicon"></i></button></a>&nbsp;&nbsp;&nbsp;<a href="<?php echo base_url('admin_3/update_wirausaha/'); echo $data['idWirausaha']; ?>"><button class="btn btn-primary"><i class="fa fa-upload bigicon"></i></button></a></td>
                  <?php $no++; ?>
                </tr>
                <?php }} ?>
                </tbody>
                <tfoot>
                <tr>                  
                  <th>No</th>
                  <th>Nama</th>
                  <th>Jenis Usaha</th>
                  <th>Tahun</th>
                  <th>Alamat/Lokasi</th>
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