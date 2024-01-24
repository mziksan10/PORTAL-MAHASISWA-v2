  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"><i class="nav-icon fas fa-home ml-1 mr-2"></i><?= $title; ?></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url('mahasiswa'); ?>">Home</a></li>
              <li class="breadcrumb-item active"><?= $title; ?></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="alert alert-success alert-dismissible fade show" role="alert">
        Halo <strong><?= ucwords(strtolower($nama)); ?></strong> Selamat datang kembali!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="row mt-5">
        <div class="col">
        <h1 style="text-align: center;">PORTAL MAHASISWA</h1>
        </div>
      </div>
      <div class="row">
        <div class="col">
        <h1 style="text-align: center; font-family: cooper;">POLITEKNIK PIKSI GANESHA</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-12" align="center">
        <img src="<?= base_url('assets/'); ?>dist/img/bg_welcome.png" alt="bg_welcome" style="width: 50%;" class="mt-1 mb-3">
        </div>
      </div>
      <div class="row">
      <br>
      <br>
      </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->



