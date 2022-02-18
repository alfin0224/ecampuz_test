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
					<h1 class="m-0 text-dark">Ubah Instansi</h1>
				</div><!-- /.col -->
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="<?= base_url('/admin/home')?>">Home</a></li>
						<li class="breadcrumb-item"><a
								href="<?= base_url('/admin')?>">Instansi</a></li>
						<li class="breadcrumb-item active">Ubah Instansi</li>
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
					<div class="card-body">
                    <?php foreach ($instansi as $i) { ?>
						<form action="<?= base_url('/admin/simpan_ubah/');  echo encrypt_url($i->id);?>" method="post">
							<div class="form-row">
								<div class="form-group col-md-4">
									<div class="form-group mb-3">
										<label for="kategori">Nama Instansi:</label>
										<input type="text" class="form-control" id=nama" name="nama"
											placeholder="Nama Instansi" value="<?php echo $i->nama; ?>" required>
									</div>
								</div>
							</div>

                            <div class="form-group col-md-12">
								<div class="form-group">
									<label for="isi">Deskripsi</label>
									<textarea id="deskripsi" name="deskripsi" class="textarea" placeholder="Deskripsi"
										style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"
										required><?php echo $i->deskripsi; ?>
									</textarea>
								</div>
							</div>
					</div>
                    <?php  } ?>
					<div class="modal-footer">
						<button type="submit" class="btn btn-primary">Ubah Data</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>


