
<body class="hold-transition login-page">
    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="<?= base_url('assets/')?>dist/img/piksi.png" alt="piksi" height="60" width="60">
  </div>
<div class="login-box">
  <div class="login-logo">
    <img src="<?= base_url('assets/'); ?>dist/img/portal_mahasiswa.png" alt="logo portal" style="width: 80%;">
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p align="center"><?= $title; ?></p>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
      <strong>Halo!</strong> bagi Mahasiswa Baru, silahkan registrasi terlebih dahulu menggunakan NPM anda. Jika sudah abaikan pesan ini.
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <?= $this->session->flashdata('message'); ?>
      <form action="<?= base_url('auth/aksi_login')?>" method="post" autocomplete="off">
        <div class="input-group mb-1">
          <input type="text" class="form-control" placeholder="NPM" name="npm">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <?= form_error('npm', '<div class="text-danger small ml-3">','</div>'); ?>
        <div class="input-group mb-1">
          <input type="password" class="form-control" placeholder="Password" name="password" autocomplete="off">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <?= form_error('password', '<div class="text-danger small ml-3">','</div>'); ?>
        <div class="row">
          <!-- /.col -->
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block mt-2" width="100%">Login</button>
          </div>
          <!-- /.col -->
        </div>
        <div class="row">
        <div class="col-12">
        <p class="mt-3" align="center">
          <a href="<?= base_url('auth/lupa_password'); ?>" class="text-center">Tidak ingat kata sandi?</a><br>
          Belum Punya Akun? Klik <a href="<?= base_url('auth/register'); ?>" class="text-center">Daftar Sekarang</a>
        </p>
        </div>
        </div>
      </form>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->


