
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
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v2</li>
            </ol>
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

          <form action="<?php echo site_url('admin/update');?>" method="post">
               <input type="hidden" name="id" value="<?php echo $data->id; ?>">
                    <div class="form-group row">
                      <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-6">
                        <input value="<?php echo $data->nama_admin; ?>" type="text" class="form-control" id="nama_admin" name="nama_admin">
                      </div>
                    </div>

    

                    <div class="form-group row">
                      <label for="penerbit" class="col-sm-2 col-form-label">Username</label>
                        <div class="col-sm-6">
                        <input value="<?php echo $data->username; ?>" type="text" class="form-control" id="username" name="username">
                        </div>
                    </div>

                    <div class="form-group row">
                      <label for="harga" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-6">
                        <input value="<?php echo $data->password; ?>" type="text" class="form-control" id="password" name="password">
                        </div>
                    </div>

                    <div class="form-group row">
                      <label for="deskripsi" class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-6">
                        <input value="<?php echo $data->alamat; ?>" type="text" class="form-control" id="alamat" name="alamat">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                    <label for="simpan" class="col-sm-2 col-form-label"></label>
                        <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Simpan</button>
                      </div>
                    </div>
                </form>


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
