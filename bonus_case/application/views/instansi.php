<style>
    .tooltip-edit {
      position: relative;
      display: inline-block;
      word-break: normal;
      word-spacing: normal;
      white-space: normal;
      line-break: auto;
      font-size: .875rem;
      word-wrap: break-word;

    }

    .tooltip-edit-text {
      visibility: hidden;
      width: 200px;
      background-color: black;
      color: #fff;
      text-align: center;
      border-radius: 6px;
      padding: 5px 0;
      position: absolute;
      z-index: 1;
      right: 40px;
      top: -20px;
    }

    .tooltip-edit:hover .tooltip-edit-text {
      visibility: visible;
    }

    .tooltip-delete {
      position: relative;
      display: inline-block;
      word-break: normal;
      word-spacing: normal;
      white-space: normal;
      line-break: auto;
      font-size: .875rem;
      word-wrap: break-word;
    }

    .tooltip-delete-text {
      visibility: hidden;
      width: 200px;
      background-color: black;
      color: #fff;
      text-align: center;
      border-radius: 6px;
      padding: 5px 0;
      position: absolute;
      z-index: 1;
      right: 75px;
      top: -20px;
    }

    .tooltip-delete:hover .tooltip-delete-text {
      visibility: visible;
    }
  </style>
  <!-- Sidebar Menu -->
  <nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
           <li class="nav-item">
            <a href="<?= base_url('/admin')?>" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Instansi
              </p>
            </a>

          </li>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark">Instansi</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="<?= base_url('/admin')?>">Home</a></li>
            <li class="breadcrumb-item active">Instansi</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Instansi</h3><br><br>

            <div class="row">
              <div class="col-lg-6">
              </div>  
            </div>

            <a href="<?= base_url('/admin/tambah')?>" class="btn btn-success" title="Tambah">
              <i class="fas fa-plus"></i> Tambah Instansi
            </a>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Deskripsi</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php $x = 0;
                foreach ($instansi as $i) { ?>
                  <tr>
                    <td><?php echo $x+1; ?></td>
                    <td><?php echo $i->nama; ?></td>
                    <td><?php echo $i->deskripsi; ?></td>

                    <td class="text-center">
                      <a class="btn btn-warning" href="<?= base_url('admin/ubah/'); echo encrypt_url($i->id); ?>" role="button" title="Edit">
                        <i class="fas fa-edit"></i>
                      </a>
                      <a href="<?php echo base_url('admin/hapus/'); echo encrypt_url($i->id); ?>" class="btn btn-danger" title="Hapus">
                        <i class="fa fa-trash"></i>
                      </a>

                  </td>
                </tr>
                <?php $i++; } ?>
              </tbody>
              <tfoot>
                <tr>
                <th>No</th>
                  <th>Nama</th>
                  <th>Deskripsi</th>
                  <th>Aksi</th>
                </tr>
              </tfoot>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>