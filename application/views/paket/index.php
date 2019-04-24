
<?php $this->load->view('layout/css') ?>
<div class="wrapper">
<?php $this->load->view('layout/navbar') ?>



  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <center><span class="brand-text font-weight-light">Laundry</span></center>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
       
          <a href="#" class="d-block"><?= $this->session->userdata('nama_admin')?> </a>
      
        </div>
      </div>
<?php $this->load->view('layout/leftbar') ?>
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          </div><!-- /.col -->
          <div class="col-sm-6">
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
    
          <!-- tabel -->

          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Data Paket</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
                <div class="py-4">
                   <a href="<?php echo site_url('paket/tambah');?>" class="btn btn-primary"><i class="fa fa-plus-circle"></i> Tambah Data</a>
               </div>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Paket</th>
                  <th>Harga Per kilo</th>
                  <th>Aksi</th>

                </tr>
                </thead>
                <tbody>
                      <?php
                            $no =1;
                            foreach($data as $value){
                                ?>
                <tr>
                  <td><?php echo $no++; ?></td>
                  <td><?php echo $value->nama_paket; ?></td>
                  <td><?php echo $value->harga_perkilo; ?></td>
                  <td>
                    <a class="btn btn-warning" href="<?php echo site_url('paket/edit/'.$value->id); ?>">
                    <i class="fa fa-edit"></i>Edit</a>
                    <a class="btn btn-danger" href=" <?php echo site_url('paket/hapus/'.$value->id); ?>">
                    <i class="fa fa-trash"></i> Hapus</a>
                  </td>
                </tr>
                </tbody>
          
                 <?php } ?>
        
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->


          <!-- /tabel -->

        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
  
          <!-- /.Left col -->
          <!-- right col (We are only adding the ID to make the widgets sortable)-->
          <section class="col-lg-5 connectedSortable">

         


            <!-- /.card -->
          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->

<?php $this->load->view('layout/js') ?>
