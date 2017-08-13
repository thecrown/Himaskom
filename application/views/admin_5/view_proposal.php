<section class="content-header">
      <h1>
        Proposal 
        <small>View All Data Proposal From Database</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Dashboard</a></li>
        <li class="active">Proposal</li>
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
                  <th>Judul Proposal</th>
                  <th>No Proposal</th>
                  <th>Bidang</th>
                  <th>Keterangan</th>
                  <th>File Proposal</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <?php $no = 1; ?>
                <?php if(isset($proposal)){ ?>
                <?php foreach($proposal as $data){ ?>
                <tr>
                  <td><?php echo $no; ?></td>
                  <td><?php echo $data['judul_proposal']; ?></td>
                  <td><?php echo $data['no_proposal']; ?></td>
                  <td>
                    <?php if($data['idbidang']==1){
                      echo "Ristek";
                    }elseif($data['idbidang']==2){
                      echo "Infokom";
                    }elseif($data['idbidang']==3){
                      echo "Ekobis";
                    }elseif($data['idbidang']==4){
                      echo "Organisasi";
                    }elseif($data['idbidang']==7){
                      echo "Kesma";
                    }else{
                      echo "PPMB";
                    } ?>
                  </td>
                  <td><?php echo $data['keterangan']; ?></td>
                  <td><?php echo $data['file_proposal']; ?></td>
                  <td><a href="<?php echo base_url('admin_5/delete_proposal/'); echo $data['idproposal'];?>"><button class="btn btn-danger"><i class="fa fa-trash bigicon"></i></button></a>&nbsp;&nbsp;&nbsp;<a href="<?php echo base_url('admin_5/update_proposal/'); echo $data['idproposal']; ?>"><button class="btn btn-primary"><i class="fa fa-upload bigicon"></i></button></a></td>
                  <?php $no++; ?>
                </tr>
                <?php } } ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>no</th>
                  <th>Judul Proposal</th>
                  <th>No Proposal</th>
                  <th>Bidang</th>
                  <th>Keterangan</th>
                  <th>File Proposal</th>
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