<section class="content-header">
      <h1>
        PPMB
        <small>View All Data Mahasiswa From Database</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Dashboard</a></li>
        <li class="active">MAHASISWA BARU</li>
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
                  <th>Nama</th>
                  <th>Jalur Masuk</th>
                  <th>Alamat Kos</th>
                  <th>Alamat Rumah</th>
                  <th>No hp</th>
                  <th>Email</th>
                  <th>Keterangan</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php $no = 1; ?>
                <?php if(isset($mahasiswa)){ ?>
                <?php foreach($mahasiswa as $data){ ?>
                <tr>
                  <td><?php echo $no; ?></td>
                  <td><?php echo $data['Nama']; ?></td>
                  <td><?php echo $data['Jalur_Masuk']; ?></td>
                  <td><?php echo $data['Alamat_kos']; ?></td>
                  <td><?php echo $data['Alamat_Rumah']; ?></td>
                  <td>+62<?php echo $data['No_hp']; ?></td>
                  <td><?php echo $data['Email']; ?></td>
                  <td><?php echo $data['Keterangan']; ?></td>
                  <td><a href="<?php echo base_url('admin_8/delete_mahasiswa/'); echo $data['idMahasiswa'];?>"><button class="btn btn-danger"><i class="fa fa-trash bigicon"></i></button></a>&nbsp;&nbsp;&nbsp;<a href="<?php echo base_url('admin_8/update_mahasiswa/'); echo $data['idMahasiswa']; ?>"><button class="btn btn-primary"><i class="fa fa-upload bigicon"></i></button></a></td>
                  <?php $no++; ?>
                </tr>
                <?php } } ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>no</th>
                  <th>Nama</th>
                  <th>Jalur Masuk</th>
                  <th>Alamat Kos</th>
                  <th>Alamat Rumah</th>
                  <th>No hp</th>
                  <th>Email</th>
                  <th>Keterangan</th>
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