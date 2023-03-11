<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0"><i class="nav-icon fas fa-paper-plane ml-1 mr-2"></i><?= $title; ?></h1>
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
    <div class="col-12 col-sm-12">
          <div class="card">
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered table-hover">
                  <thead class="bg-success">
                  <tr style="text-align: center;">
                    <th>No</th>
                    <th>Nama</th>
                    <th>Bagian</th>
                    <th>Nomor</th>
                    <th>Chat Only</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                  $no = 1;
                  foreach($kontak->result() as $row){ ?>
                  <tr style="text-align: center;">
                    <td><?= $no++; ?></td>
                    <td><?= $row->nama; ?></td>
                    <td><?= $row->sub_bagian; ?></td>
                    <td>0<?= $row->nomor; ?></td>
                    <td style="text-align: center;">
                      <a href="https://api.whatsapp.com/send?phone=62<?= $row->nomor; ?>&text=Assalamualaikum, Halo Kak! Nama saya <?= ucwords(strtolower($nama)); ?> NPM saya <?= $npm; ?> Saya ingin bertanya ..." type="button" class="badge bg-success">
                      <i class="fab fa-whatsapp"></i>
                      </a>
                  </td>
                  </tr>
                  <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
            <!-- /.card -->
          </div>
        </div>
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->