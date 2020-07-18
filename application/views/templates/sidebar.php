<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo base_url('welcome')?>">
        <div class="sidebar-brand-icon ">
          <i class="fas fa-store"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Toko Online</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url('welcome')?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Kategori
      </div>

      <!-- Nav Item - Tables -->
      <li class="nav-item">
        <a class="nav-link" href="<?php  echo base_url('kategori/elektronik')?>">
          <i class="fas fa-fw fa-tv"></i>
          <span>Elektronik</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('kategori/pakaian_pria') ?>">
          <i class="fas fa-fw fa-tshirt"></i>
          <span>Pakaian Pria</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('kategori/pakaian_wanita') ?>">
          <i class="fas fa-fw fa-tshirt"></i>
          <span>Pakaian Wanita</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('kategori/pakaian_anakanak') ?>">
          <i class="fas fa-fw fa-tshirt"></i>
          <span>Pakaian Anak-anak</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="<?php echo base_url('kategori/pakaian_olahraga') ?>">
          <i class="fas fa-fw fa-futbol"></i>
          <span>Pakaian Olahraga</span></a>
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

          <!-- Topbar Search -->
          <?php echo form_open('dashboard/search') ?>
            <div class="input-group">
              <input type="text" name="keyword" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="submit">
                  <i class="fas fa-search fa-sm"></i> 
                </button>
              </div>
            </div>
          <?php echo form_close() ?>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>
            
            <!-- penambahan keranjang belanja -->

            <div class="navbar">
              <ul class="nav navbar-nav navbar-right">
                <li>
                <?php $keranjang = $this->cart->total_items()?>  
                
                <?php echo anchor('dashboard/detailKeranjang', '<i data-toggle="tooltip" data-placement="bottom" title="Keranjang Belanja" class="fas fa-shopping-cart">: '.$keranjang.'</i>') ?> items
                
                </li>
              </ul>
            </div>

            <div class="topbar-divider d-none d-sm-block"></div>
  
          <ul class="nav navbar-nav navnar-right">
            <?php if($this->session->userdata('username')){?>
            <li class="mr-3 mt-2">Selamat Datang : <?php echo $this->session->userdata('username') ?></li>
            <li><?php echo anchor('auth/logout', '<div class="btn btn-sm btn-danger">Logout</div>')?></li>
            <?php }else {?>
            <li><?php echo anchor('auth/login', '<div class="btn btn-primary">Login</div>')?></li>
                  <?php }?>
          </ul>

        </nav>
        <!-- End of Topbar -->