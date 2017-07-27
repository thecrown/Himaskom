<section class="content-header">
      <h1>
        Ristek
        <small>View All Data Bank Soal From Database</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Dashboard</a></li>
        <li class="active">BANK SOAL</li>
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
                  <th>Matkul</th>
                  <th>Tahun</th>
                  <th>Keterangan</th>
                  <th>File</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php $no = 1; ?>
                <?php if(isset($soal)){ ?>
                <?php foreach($soal as $data){ ?>
                <tr>
                  <td><?php echo $no; ?></td>
                  <td><?php echo $data['matkul']; ?></td>
                  <td><?php echo $data['Tahun']; ?></td>
                  <td><?php echo $data['Keterangan']; ?></td>
                  <td><?php echo $data['File']; ?></td>
                  <td><a href="<?php echo base_url('admin_1/delete_banksoal/'); echo $data['idBank_soal'];?>"><button class="btn btn-danger"><i class="fa fa-trash bigicon"></i></button></a>&nbsp;&nbsp;&nbsp;<a href="<?php echo base_url('admin_1/update_banksoal/'); echo $data['idBank_soal']; ?>"><button class="btn btn-primary"><i class="fa fa-upload bigicon"></i></button></a>&nbsp;&nbsp;&nbsp;<a href="<?php echo base_url('assets/file/banksoal/'); echo $data['File']; ?>" target="_blank"><button class="btn btn-info"><i class="fa fa-download bigicon"></i></button></a></td>
                  <?php $no++; ?>
                </tr>
                <?php } } ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>no</th>
                  <th>Matkul</th>
                  <th>Tahun</th>
                  <th>Keterangan</th>
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