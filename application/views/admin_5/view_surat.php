<section class="content-header">
      <h1>
        Surat 
        <small>View All Data Surat From Database</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Dashboard</a></li>
        <li class="active">Surat</li>
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
                  <th>Judul Surat</th>
                  <th>Tanggal</th>
                  <th>Keterangan</th>
                  <th>File Surat</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php $no = 1; ?>
                <?php if(isset($surat)){ ?>
                <?php foreach($surat as $data){ ?>
                <tr>
                  <td><?php echo $no; ?></td>
                  <td><?php echo $data['judul_surat']; ?></td>
                  <td><?php echo $data['tanggal']; ?></td>
                  <td><?php echo $data['keterangan']; ?></td>
                  <td><?php echo $data['file_surat']; ?></td>
                  <td><a href="<?php echo base_url('admin_5/delete_surat/'); echo $data['idsurat'];?>"><button class="btn btn-danger"><i class="fa fa-trash bigicon"></i></button></a>&nbsp;&nbsp;&nbsp;<a href="<?php echo base_url('admin_5/update_surat/'); echo $data['idsurat']; ?>"><button class="btn btn-primary"><i class="fa fa-upload bigicon"></i></button></a></td>
                  <?php $no++; ?>
                </tr>
                <?php } } ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>no</th>
                  <th>Judul Surat</th>
                  <th>Tanggal</th>
                  <th>Keterangan</th>
                  <th>File Surat</th>
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