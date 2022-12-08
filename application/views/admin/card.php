<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Momsky Parenting</title>
    <link href="<?php echo base_url() . "asset/img/favicon.ico" ?>" rel="icon">

<!-- Google Web Fonts -->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet"> 

<!-- Font Awesome -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

<!-- Libraries Stylesheet -->
<link href="<?php echo base_url () . "asset/lib/owlcarousel/assets/owl.carousel.min.css" ?>" rel="stylesheet">

<!-- Customized Bootstrap Stylesheet -->
<link href="<?php echo base_url () . "asset/css/style.css" ?>" rel="stylesheet">
</head>
    <!-- Custom fonts for this template-->
     <!-- Custom fonts for this template-->
     <link href="<?php echo base_url() . "asset/auth/vendor/fontawesome-free/css/all.min.css" ?>" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url() . "asset/auth/css/sb-admin-2.min.css"  ?>" rel="stylesheet">


</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url() . "auth/halaman_utama" ?>">
                <div class="sidebar-brand-icon rotate-n-15">
                <img class="img-fluid mr-3" width="80"  src="<?php echo base_url() . "asset/img/pngwing.com.png "   ?>" ></i>
                </div>
                <div class="sidebar-brand-text mx-3">Momsky Parenting</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

      
 
            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
          

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Pages</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="<?php echo base_url() . "auth/halaman_utama" ?>">Home</a>
                        <a class="collapse-item" href="<?php echo base_url() . "auth/about" ?>">About</a>
                        <a class="collapse-item" href="<?php echo base_url() . "auth/course" ?>">Courses</a>
                        <a class="collapse-item" href="<?php echo base_url() . "auth/contact" ?>">Contact</a>
                    </div>
                </div>
            </li>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url() . "user/card" ?>">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>My profile</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url() . "auth/login"?>">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Logout</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

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
                    
 <!-- Topbar Start -->
 <ul class="navbar-nav mr-auto">
 <div class="container-fluid bg-white mr-auto">
        <div class="row py-2 text-center lg-left ">
            <div class="col-lg-6 text-center ">
                <div class="d-inline-flex align-items-center text-dark">
                    <small><i class="fa fa-envelope mr-2"></i>info@example.com</small>
                </div>
            </div>
            <div class="col-lg-6 text-center text-lg-right mx-auto">
                <div class="d-inline-flex align-items-center">
                    <a class="text-dark px-2" href="">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="text-dark px-2" href="">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a class="text-dark px-2" href="">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a class="text-dark px-2" href="">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a class="text-dark pl-2" href="">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    </ul>
    <!-- Topbar End -->

<ul class="navbar-nav ml-auto">

     <!-- Nav Item - User Information -->
      <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                 data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?= $user['name']; ?></span>
                                <img class= "img-profile rounded-circle"
                                    src="<?php echo base_url() . "asset/auth/img/undraw_profile.svg" ?>">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="<?= base_url() . "user/card" ?>">
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
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                    </div>
                    <div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="<?php echo base_url() . "asset/img/user.png" ?>" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><?php echo $user['name']; ?></h5>
        <p class="card-text"><?php echo $user['email']; ?></p>
        <p class="card-text"><small class="text-muted">Member since <?php echo date('d F Y', $user['data_created']); ?></small></p>
      </div>
    </div>
  </div>
</div>
<hr class="sidebar-divider">

                  <!-- Header Start -->
                  <div class="row justify-content-center">

<div class="col-lg-7 mx-auto">
    <div class="row">
                    
                            <div class="col-lg">
                                <div class="p-5">
                                    <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Verifikasi Data Diri</h1>
                            </div>
                            <form action="<?php echo base_url(). 'user/verifikasi' ?>" method="post">
                                <div class="form-group">
                              
                                    <input type="text"  class="form-control form-control-user" id="ayah" name="ayah"
                                        placeholder="Nama Ayah" value="<?php echo set_value('ayah')?>">
                                       
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="ibu" name="ibu"
                                        placeholder="Nama Ibu" value="<?php echo set_value('ibu')?>">
                                        <?php echo form_error('email','<small class="text-danger pl-3">','</small>') ?>
                             
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="alamat" name="alamat"
                                        placeholder="Alamat" value="<?php echo set_value('alamat')?>">
                                        <?php echo form_error('email','<small class="text-danger pl-3">','</small>') ?>
                             
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="jumlah_anak" name="jumlah_anak"
                                        placeholder="Jumlah Anak" value="<?php echo set_value('jumlah_anak')?>">
                                        <?php echo form_error('email','<small class="text-danger pl-3">','</small>') ?>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-user btn-block" ><img class="asset/img/ajax-loader.gif">
                                            Login
                                        </button>
                                  
                                </button>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        


    </div>
    <!-- Header End -->
     <!-- Footer -->
     <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Momsky Parenting <?php echo date('Y') ?></span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

           

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="<?php echo base_url(). "auth/login" ?>">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?php echo base_url() . "asset/auth/vendor/jquery/jquery.min.js" ?>"></script>
    <script src= "<?php echo base_url() . "asset/auth/vendor/bootstrap/js/bootstrap.bundle.min.js" ?>"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?php echo base_url() . "asset/auth/vendor/jquery-easing/jquery.easing.min.js" ?>"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?php echo base_url() . "asset/auth/js/sb-admin-2.min.js" ?>"></script>

</body>

</html>