<!-- Navbar -->
<nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
  <div class="container">
    <a href="<?= base_url() ?>" class="navbar-brand">
    <h4><img src="<?= base_url() ?>template/dist/img/logo1.png" class="brand-image img-circle" style="opacity: .8"><i> Wanthy Craft</i></h4>
      <span class="brand-text font-weight-light"><b></b></span>
    </a>

    <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse order-3" id="navbarCollapse">

      <!-- Left navbar links -->
      <ul class="navbar-nav">
        <li class="nav-item">
          <a href="<?= base_url() ?>" class="nav-link"><b>Home</b></a>
        </li>
        <?php $kategori = $this->m_home->get_all_data_kategori(); ?>
        <li class="nav-item dropdown">
          <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle"><b>Kategori</b></a>
          <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
            <?php foreach ($kategori as $key => $value) { ?>
              <li><a href="<?= base_url('home/kategori/' . $value->id_kategori) ?>" class="dropdown-item"><?= $value->nama_kategori ?></a></li>
            <?php } ?>
          </ul>
        </li>
        <li class="nav-item">
          <a href="<?= base_url('home/about/') ?>" class="nav-link"><b>About</b></a>
        </li>

      </ul>
    </div>

    <!-- Right navbar links -->
    <ul class="order-1 order-md-3 navbar-nav navbar-no-expand ml-auto">
      <!-- Messages Dropdown Menu -->
      <li class="nav-item">
        <?php if ($this->session->userdata('email') == "") { ?>
          <a class="nav-link" href="<?= base_url('auth/login_user') ?>">
            <span class="brand-text font-weight-light"><b> Admin</b></span>
            <img src="<?= base_url() ?>template/dist/img/login.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
          </a>
        <?php } else { ?>
          <a class="nav-link" data-toggle="dropdown" href="#">
            <span class="brand-text font-weight-light"><b><?= $this->session->userdata('nama_pelanggan') ?></b></span>
            <img src="<?= base_url('assets/foto/' . $this->session->userdata('foto')) ?>" alt="" class="brand-image img-circle elevation-3" style="opacity: .8">
          </a>
        <?php } ?>
      </li>
      <?php
      $keranjang = $this->cart->contents();
      $jml_item = 0;
      foreach ($keranjang as $key => $value) {
        $jml_item = $jml_item + $value['qty'];
      }
      ?>

      <!-- Notifications Dropdown Menu -->

    </ul>
  </div>
</nav>
<!-- /.navbar -->

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-dark"> <?= $title ?></h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a>Wanthy Craft</a></li>
            <li class="breadcrumb-item"><a><?= $title ?></a></li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <div class="content">
    <div class="container"