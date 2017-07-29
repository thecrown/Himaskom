<section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url('assets');?>/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $this->session->userdata('curent_name_user'); ?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Sponsor</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('admin_2/show_sponsor/'); ?>"><i class="fa fa-circle-o"></i>Sponsor</a></li>
            <li><a href="<?php echo base_url('admin_2/add_sponsor/'); ?>"><i class="fa fa-circle-o"></i>Add Sponsor</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Alumni</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('admin_2/show_alumni/'); ?>"><i class="fa fa-circle-o"></i>Alumni</a></li>
            <li><a href="<?php echo base_url('admin_1/add_pkm/'); ?>"><i class="fa fa-circle-o"></i>Add PKM</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-share"></i> <span>Pembicara</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('admin_1/bank_soal/'); ?>"><i class="fa fa-circle-o"></i>Bank Soal</a></li>
            <li><a href="<?php echo base_url('admin_1/add_soal/'); ?>"><i class="fa fa-circle-o"></i> Add Bank Soal</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-share"></i> <span>Pembicara</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url('admin_1/bank_soal/'); ?>"><i class="fa fa-circle-o"></i>Bank Soal</a></li>
            <li><a href="<?php echo base_url('admin_1/add_soal/'); ?>"><i class="fa fa-circle-o"></i> Add Bank Soal</a></li>
          </ul>
        </li>
      </ul>
    </section>