<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Admin MP</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            
            
            <!-- Nav Item - Tables -->
          <!-- Nav Item - Tables -->
<li class="nav-item ">
      <a class="nav-link" href="<?= base_url() ."backend/index" ?>">
      <i class="fas fa-fw fa-table"></i>
      <span>DATA ADMIN</span></a>
  </li>
  
  <!-- Divider -->
  <!-- Nav Item - Dashboard -->
  <li class="nav-item  ">
      <a class="nav-link" href="<?= base_url() . "backend/komentar"?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>KOMENTAR</span></a>
  </li>

  <li class="nav-item active ">
      <a class="nav-link" href="<?= base_url() . "backend/artikel"?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>ARTIKEL</span></a>
  </li>

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

           

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                 

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                      
                      
                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <!-- Nav Item - User Information -->
      <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                 data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"></span>
                                <img class= "img-profile rounded-circle"
                                    src="<?php echo base_url() . "assets/auth/img/undraw_profile.svg" ?>">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="<?= base_url() . "admin/card" ?>">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>

                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="<?php echo base_url() . 'auth/login' ?>" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>       

                </nav>

                <!-- End of Topbar -->

<div class="container pt-5">
    <h3><?= $title ?></h3>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb ">
            <li class="breadcrumb-item"><a>Mahasiswa</a></li>
            <li class="breadcrumb-item "><a href="<?= base_url('artikel'); ?>">List Data</a></li>
            <li class="breadcrumb-item active" aria-current="page">Edit Data</li>
        </ol>
    </nav>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <?php
                    //create form
                    $attributes = array('id' => 'FrmEditMahasiswa', 'method' => "post", "autocomplete" => "off");
                    echo form_open('', $attributes);
                    ?>
                     <div class="form-group row">
                        <label for="Jurnal" class="col-sm-2 col-form-label mx-auto">Jurnal</label>
                        <div class="col-sm-8">
                            <input type="hidden" class="form-control" id="Id" name="id" value=" <?= $artikel->id; ?>">
                            <input type="file" 
                             id="link4"  name="link4" >
                                           

                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="Artikel" class="col-sm-2 col-form-label mx-auto">Artikel</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="artikel4" name="artikel4" value="<?= $artikel->artikel3; ?>">
                            <small class="text-danger">
                                <?php echo form_error('artikel4') ?>
                            </small>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="gambar" class="col-sm-2 col-form-label mx-auto">Gambar</label>
                        <div class="col-sm-8">
                           
                        <div class="form-group">
                        <input type="file" 
                        id="gambar4"  name="gambar4" >
                                           
                             </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-10 offset-md-2">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                            <a class="btn btn-secondary" href="javascript:history.back()">Kembali</a>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
 