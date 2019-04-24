
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        <li class="nav-item">
            <a href="<?php echo site_url('admin/index') ?>" class="nav-link">
              <i class="nav-icon fa fa-home"></i>
              <p>Dashboard</p>
            </a>
          </li>
        <li class="nav-item">
            <a href="<?php echo site_url('admin/tambah') ?>" class="nav-link">
              <i class="nav-icon fa fa-users"></i>
              <p>Tambah User</p>
            </a>
          </li>
           <li class="nav-item">
            <a href="<?php echo site_url('paket/index') ?>" class="nav-link">
              <i class="nav-icon fa fa-plus-square-o"></i>
              <p>Tambah Paket</p>
            </a>
          </li>
         <li class="nav-item">
            <a href="<?php echo site_url('laundry/index') ?>" class="nav-link">
              <i class="nav-icon fa fa-book"></i>
              <p>Data Laundry</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo site_url('panduan/index') ?>" class="nav-link">
              <i class="nav-icon fa fa-book"></i>
              <p>PANDUAN APLIKASI</p>
            </a>
          </li>
            <li class="nav-item">
            <a href="<?=base_url('admin/logout')?>" class="nav-link">
             <!--  <i class="nav-icon fa fa-book"></i> -->
              <p>Logout</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->