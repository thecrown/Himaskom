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
                  <th>Nama Staff</th>
                  <th>Alamat</th>
                  <th>Bidang</th>
                  <th>Penilaian</th>
                  <th>Keterangan</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php $no = 1; ?>
                <?php if(isset($anggota)){ ?>
                <?php foreach($anggota as $data){ ?>
                <tr>
                  <td><?php echo $no; ?></td>
                  <td><?php echo $data['Nama_staff']; ?></td>
                  <td><?php echo $data['Alamat']; ?></td>
                  <td>
                    <?php if($data['Bidang']==1){
                      echo "Ristek";
                    }elseif($data['Bidang']==2){
                      echo "Infokom";
                    }elseif($data['Bidang']==3){
                      echo "Ekobis";
                    }elseif($data['Bidang']==4){
                      echo "Organisasi";
                    }elseif($data['Bidang']==7){
                      echo "Kesma";
                    }else{
                      echo "PPMB";
                    } ?>
                  </td>
                  <td><?php echo $data['Penilaian']; ?></td>
                  <td><?php echo $data['Keterangan']; ?></td>
                  <td><a href="<?php echo base_url('admin_4/delete_anggota/'); echo $data['idAnggota_kepengurusan'];?>"><button class="btn btn-danger"><i class="fa fa-trash bigicon"></i></button></a>&nbsp;&nbsp;&nbsp;<a href="<?php echo base_url('admin_4/update_anggota/'); echo $data['idAnggota_kepengurusan']; ?>"><button class="btn btn-primary"><i class="fa fa-upload bigicon"></i></button></a></td>
                  <?php $no++; ?>
                </tr>
                <?php } } ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>no</th>
                  <th>Nama Staff</th>
                  <th>Alamat</th>
                  <th>Bidang</th>
                  <th>Penilaian</th>
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