<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>public/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>public/font-awesome/css/all.css">
    <link rel="stylesheet" href="<?= base_url() ?>public/css/select2.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>public/css/select2-bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>public/css/style.css">
    <link href="<?= base_url() ?>public/select2/dist/css/select2.min.css" rel="stylesheet" />
    <script type="text/javascript" src="<?= base_url() ?>public/font-awesome/js/all.min.js"></script>
    <title><?= SYSTEM_TITLE ?></title>
  </head>
  <body class="sb-nav-fixed">

    <nav class="sb-topnav navbar fixed-top navbar-expand navbar-dark bg-dark">
          <a class="navbar-brand" href="<?= base_url() ?>users/own/1"><?= SYSTEM_NAME ?></a><button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button
          ><!-- Navbar Search-->
          <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
              <div class="input-group">
                  <input class="form-control" type="text" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2" />
                  <div class="input-group-append">
                      <button class="btn btn-success" type="button"><i class="fas fa-search"></i></button>
                  </div>
              </div>
          </form>

          <!-- Navbar-->
          <ul class="navbar-nav ml-auto ml-md-0">
            <li class="nav-item">
              <a class="nav-link" href="#">Hi <?= ucwords($_SESSION['uname']) ?>!</a>
            </li>
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                      <a class="dropdown-item" href="<?php echo base_url() ?>logout">Logout</a>
                  </div>
              </li>
          </ul>
      </nav>

      <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                      <?php user_primary_links($_SESSION['userPermmissions']) ?>
                    </div>
                </div>
                <div class="sb-sidenav-footer">
                    <div class="small">Logged in as:</div>
                    <?= ucwords($_SESSION['uname']) ?>
                </div>
            </nav>
        </div>
