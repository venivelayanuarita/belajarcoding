
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
              <h1 class="card-title"><center>PANDUAN PENGGUNAAN APLIKASI</center></h1>
            </div>
          </div>

          <div>
            <div class="isi">
              <p align="justify">1. STRUKTUR MENU<br>
                      Terdapat menu utama pada aplikasi ini, yaitu:<br>
                  a. Halaman Login<br>
                  Pada halaman login user akan memasukkan username dan password. Username dan password yang dimasukkan harus sudah terdaftar pada aplikasi sebagai admin. Jika belum terdaftar maka tidak akan bisa masuk ke dalam aplikasi. <br>
                  b. Dashboard<br>
                  Menu ini memiliki tampilan pembuka dari aplikasi tersebut. Berikut merupakan tampilan dari dashboard:<br>
                  c. Tambah User<br>
                  Menu tambah user digunakan untuk menambahkan user baru sebagai admin. Selain itu, pada menu ini juga dapat mengedit data yang salah dan juga dapat menghapus data yang tidak digunakan. Informasi yang disajikan yaitu nama user(admin), username, password dan alamat. Tampilan dari halaman tambah user sebagai berikut:<br>
                  d. Tambah Paket<br>
                  Menu tambah paket digunakan untuk menambahkan paket yang digunakan pada laundry tersebut. Terdapat paket A, B, C, D pada laundry tersebut. Yang masing-masing paket memiliki harga yang berbeda. Informasi yang disajikan yaitu tentang paket dan harga per-paket yang telah ditentukan. Pada halaman ini juga dapat mengedit data yang sudah ada, dan juga dapat menghapus data yang tidak diinginkan. Tampilan dari halaman tambah apket sebagai berikut:<br>
                  e. Data Laundry<br>
                  Pada menu data laundry digunakan untuk menyimpan data pelanggan yang sudah ada. Informasi yang disajikan pada halaman ini yaitu nama pelanggan, alamat, kontak pelanggan, berat cucian, total harga dll. Pada halaman ini juga dapat mengedit data yang sudah ada dan juga dapat menghapus data yang tidak digunakan. Berikut merupakan tampilan dari data laundry:

                <br>
                <br>
                <br>

                2. CARA PENGGUNAAN APLIKASI<br>
                Aplikasi ini digunakan untuk membantu kinerja toko laundry. Aplikasi tersebut dapat membantu untuk menyimpan data yang berkaitan dengan laundry. Mulai dari data pelanggan, harga per-paket, dan juga data admin. Berikut merupakan cara menggunakan aplikasi ini:<br>
                a. Admin yang telah terdaftar akan login ke aplikasi tersebut dengan cara memasukkan username dan password yang telah didaftarkan. Jika password atau username salah, maka admin tersebut tidak bisa masuk. Jika password dan username yang dimasukkan benar, maka admin tersebut akan dapat masuk ke aplikasi. Berikut merupakan tampilan dari login:<br>
                b.  Jika admin ingin menambahkan admin baru maka masuk kedalam menu Tambah User, kemudian menekan button “Tambah Data”. Maka akan masuk ke halaman baru. halaman baru tersebut digunakan untuk memasukkan data user baru yang akan dijadikan admin. Berikut merupakan tampilan dari tambah user:<br>
                c.  Jika sudah mengisi data tersebut, kemudian tekan “Simpan”. Maka data yang telah dimasukkan akan masuk ke dalam halaman Tambah User. <br>
                d.  Jika admin ingin menambahkan paket pada toko laundrynya, maka admin harus masuk ke menu Tambah Paket untuk mengisi data paket yang diinginkan. berikut merupakan halaman tambah paket:<br>
                e.  Jika admin sudah mengisi data paket yang diinginkan, kemudian tekan “Simpan”. Maka data yang dimasukkan akan masuk ke dalam halaman Tambah Paket.<br>
                f.  Jika ada pelanggan yang mengirim ataupun mengambil laundry, maka admin harus memasukkan data pelanggan. Berikut merupakan halaman untuk mengisi data pelanggan:<br>
                g.  Setelah admin mengisi data pelanggan yang masuk. Kemudian tekan “Simpan”. Maka data yang dimasukkan akan masuk ke dalam halaman Data Laundry.<br>
                h.  Selesai.

                </p>
            </div>
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
