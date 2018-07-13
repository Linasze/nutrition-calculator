<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico">

    <title>Dashboard Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/4.1/examples/dashboard/dashboard.css" rel="stylesheet">
  </head>

  <body>
    <nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="<?php echo URLROOT;?>/dashboards">Nuttrition</a>
      <ul class="navbar-nav float-left px-2">
        <li class="nav-item text-nowrap">
        <a class="nav-link" href="<?php echo URLROOT; ?>/dashboards">Home <span class="sr-only"></span></a>
        </li>
      </ul>
      <ul class="navbar-nav float-left px-2">
        <li class="nav-item text-nowrap">
        <a class="nav-link" href="<?php echo URLROOT; ?>#">Something <span class="sr-only"></span></a>
        </li>
      </ul>
      <ul class="navbar-nav mr-auto px-2">
        <li class="nav-item text-nowrap">
        <a class="nav-link" href="<?php echo URLROOT; ?>#">Something <span class="sr-only"></span></a>
        </li>
      </ul>
      <ul class="navbar-nav px-1">
      <?php if(isset($_SESSION['user_id'])) : ?>

        <li class="nav-item text-nowrap">
          <a class="nav-link" href="#!">Hello <?php echo $_SESSION['user_name'];?></a>
        </li>
        </ul>
     <?php if($_SESSION['user_rights'] == 1): ?>
     <ul class="navbar-nav px-1">
        <li class="nav-item text-nowrap">
        <a class="nav-link" href="<?php echo URLROOT;?>/admins">Admin panel</a>
        </li>
      </ul>
      <?php endif; ?>
        <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
        <a class="nav-link" href="<?php echo URLROOT;?>/users/logout">Logout</a>
        </li>
        <?php endif; ?>
      </ul>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link active" href="#">
                  <span data-feather="home"></span>
                  Dashboard <span class="sr-only">(current)</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo URLROOT;?>/settings">
                  <span data-feather="file"></span>
                  Settings
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="shopping-cart"></span>
                  Products
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="users"></span>
                  Customers
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="bar-chart-2"></span>
                  Reports
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="layers"></span>
                  Integrations
                </a>
              </li>
            </ul>

            <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
              <span>Saved reports</span>
              <a class="d-flex align-items-center text-muted" href="#">
                <span data-feather="plus-circle"></span>
              </a>
            </h6>
            <ul class="nav flex-column mb-2">
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Current month
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Last quarter
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Social engagement
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                  <span data-feather="file-text"></span>
                  Year-end sale
                </a>
              </li>
            </ul>
          </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Dashboard</h1>
             </div>
