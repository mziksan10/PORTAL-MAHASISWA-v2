  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"><i class="nav-icon fas fa-tasks ml-1 mr-2"></i><?= $title; ?></h1>
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
     <div class="row">
         <div class="col-md-12">
         <div class="card">
            <div class="card-body">
             <div class="table-responsive">
                 <table class="table table-hover table-bordered">
                     <thead style="background-color:purple;color:white;">
                         <tr style="text-align: center;">
                             <th>No.</th>
                             <th>Kode KSK</th>
                             <th>Nama KSK</th>
                             <th>Nilai Rata-rata</th>
                             <th>Nilai Mutu</th>
                             <th>Keterangan</th>
                             <th>Semester</th>
                         </tr>
                     </thead>
                     <tbody>
                         <?php
                         if(count($nilai_ksk)>0){                         
                         foreach ($nilai_ksk as $num=>$val) {
                        ?>
                         <tr style="text-align: center;">
                            <td><?=$num+1?></td>
                            <td><?=$val->kode_ksk?></td>   
                            <td><?=$val->nama_ksk?></td>   
                            <td><?=$val->nilai_rata_akhir?></td>   
                            <td><?=$val->nilai_mutu?></td>   
                            <td><?=$val->keterangan=='kompeten'?'<span class="badge badge-success">'.$val->keterangan.'</span>':'<span class="badge badge-danger">'.$val->keterangan.'</span>'?></td>   
                            <td><?=$val->semester?></td>   
                         </tr>
                        <?php
                         }
                        } else {
                            ?>
                            <tr>
                                <td colspan="7" style="text-align:center;color:red">
                                    Data KSK tidak ada
                                </td>
                            </tr>
                            <?php
                        }
                         ?>
                     </tbody>
                 </table>
             </div>
            <p class="card-text float-right"><small class="text-muted">*jika data tidak sesuai, segera hubungi Bagian Akademik Nilai</small></p>
            </div>
             </div>
         </div>
     </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->



