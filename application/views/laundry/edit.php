
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

          <form action="<?php echo site_url('laundry/update');?>" method="post">
               <input type="hidden" name="id" value="<?php echo $data->id; ?>">
                    <div class="form-group row">
                      <label for="nama" class="col-sm-2 col-form-label">Nama Paket</label>
                        <div class="col-sm-6">
                        <input value="<?php echo $data->nama_customer; ?>" type="text" class="form-control" id="nama_customer" name="nama_customer">
                      </div>
                    </div>

    

                    <div class="form-group row">
                      <label for="penerbit" class="col-sm-2 col-form-label">alamat</label>
                        <div class="col-sm-6">
                        <input value="<?php echo $data->alamat; ?>" type="text" class="form-control" id="alamat" name="alamat">
                        </div>
                    </div>


                    <div class="form-group row">
                      <label for="penerbit" class="col-sm-2 col-form-label">No telpon</label>
                        <div class="col-sm-6">
                        <input value="<?php echo $data->no_telp; ?>" type="text" class="form-control" id="no_telp" name="no_telp">
                        </div>
                    </div>


                    <div class="form-group row">
                      <label for="penerbit" class="col-sm-2 col-form-label">tanggal terima</label>
                        <div class="col-sm-6">
                        <input value="<?php echo $data->tgl_terima; ?>" type="text" class="form-control" id="tgl_terima" name="tgl_terima">
                        </div>
                    </div>


                    <div class="form-group row">
                      <label for="penerbit" class="col-sm-2 col-form-label">tanggal selesai</label>
                        <div class="col-sm-6">
                        <input value="<?php echo $data->tgl_selesai; ?>" type="text" class="form-control" id="tgl_selesai" name="tgl_selesai">
                        </div>
                    </div>


                    <div class="form-group row">
                      <label for="penerbit" class="col-sm-2 col-form-label">berat</label>
                        <div class="col-sm-6">
                        <input value="<?php echo $data->berat; ?>" type="text" class="form-control" id="berat" name="berat">
                        </div>
                    </div>


                    <div class="form-group row">
                      <label for="penerbit" class="col-sm-2 col-form-label">Harga</label>
                        <div class="col-sm-6">
                        <input value="<?php echo $data->harga; ?>" type="text" class="form-control" id="harga" name="harga">
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
