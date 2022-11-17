<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>naftal  | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <!-- Font Awesome -->

  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
      <div class="input-group input-group-sm">
        <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-navbar" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </div>
    </form>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
      
      <!-- Notifications Dropdown Menu -->
      
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">NAFTAL</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item">
                  <a href="./index.html" class="nav-link">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                   <p>
                     Dashboard
                   </p>
                 </a>
               </li>
          <!--   <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="./index.html" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p> v1</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index2.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v2</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="./index3.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v3</p>
                </a>
              </li>
            </ul>
          </li> -->
          <li class="nav-item">
            <a href="pages/widgets.html" class="nav-link">
              <i class="fas fa-boxes"></i>
              <p>
                Inventaire
                <span class="right badge badge-danger">New</span>
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
           <i class="fas fa-users"></i>
            <p>  Utilisateur  <span class="badge badge-info right">6</span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/layout/top-nav.html" class="nav-link">
               <i class="fas fa-address-book"></i>
                  <p>Liste utilisateur</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/top-nav-sidebar.html" class="nav-link">
                  <i class="fas fa-user-plus"></i>
                  <p>Ajouter utilisateur</p>
                </a>
              </li>
              </ul>
              </li>
              <!--  <li class="nav-item">
                <a href="pages/layout/boxed.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Boxed</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/fixed-sidebar.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Fixed Sidebar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/fixed-topnav.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Fixed Navbar</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/fixed-footer.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Fixed Footer</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/layout/collapsed-sidebar.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Collapsed Sidebar</p>
                </a>
              </li>
            </ul>
          </li>-->
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="fas fa-laptop"></i>
              <p>
                Equipement
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/charts/chartjs.html" class="nav-link">
                  <i class="fas fa-list"></i>
                  <p> Liste d'equipement </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/charts/flot.html" class="nav-link">
                  <i class="fas fa-laptop-medical"></i>
                  <p> Ajouter equipement</p>
                </a>
              </li>
              <!-- <li class="nav-item">
                <a href="pages/charts/inline.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Inline</p>
                </a>
              </li>-->
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="fas fa-wrench"></i>
              <p>
                Interventions
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/UI/general.html" class="nav-link">
                  <i class="fas fa-file-alt"></i>
                  <p> Fiche d'intervention </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/UI/icons.html" class="nav-link">
                  <i class="fas fa-file-import"></i>
                  <p> Demander intervention</p>
                </a>
              </li>
            <!--   <li class="nav-item">
                <a href="pages/UI/buttons.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Buttons</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/UI/sliders.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Sliders</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/UI/modals.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Modals & Alerts</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/UI/navbar.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Navbar & Tabs</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/UI/timeline.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Timeline</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/UI/ribbons.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ribbons</p>
                </a>
              </li>-->
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="fas fa-file-invoice"></i>
              <p>
                Decharge
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/forms/general.html" class="nav-link">
                <i class="fas fa-file-invoice"></i>
                  <p> Decharge interne</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/forms/advanced.html" class="nav-link">
                <i class="fas fa-file-invoice"></i>
                  <p>Decharge externe</p>
                </a>
              </li>
              <!--
              <li class="nav-item">
                <a href="pages/forms/editors.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Editors</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/forms/validation.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Validation</p>
                </a>
              </li>-->
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="fas fa-truck-loading"></i>
              <p>
                Acquisition
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/tables/simple.html" class="nav-link">
                  <i class="fas fa-barcode"></i>
                  <p>Acquisition interne</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/tables/data.html" class="nav-link">
                  <i class="fas fa-truck-moving"></i>
                  <p>Acquisition externe</p>
                </a>
              </li>

              <!--<li class="nav-item">
                <a href="pages/tables/jsgrid.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>jsGrid</p>
                </a>
              </li> -->
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="fas fa-shopping-cart"></i>
              <p>
                Fournisseur
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/tables/simple.html" class="nav-link">
                  <i class="fas fa-clipboard-list"></i>
                  <p>Liste Fournisseur</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/tables/data.html" class="nav-link">
                  <i class="fas fa-cart-plus"></i>
                  <p>Ajourter fournisseur</p>
                </a>
              <!--<li class="nav-item">
                <a href="pages/tables/jsgrid.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>jsGrid</p>
                </a>
              </li> -->
            </ul>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="fas fa-paper-plane"></i>
              <p>
                Affectation
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/tables/simple.html" class="nav-link">
                  <i class="fas fa-share-square"></i>
                  <p>Update Affectation</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/tables/data.html" class="nav-link">
                  <i class="fas fa-file-export"></i>
                  <p>Demande d'affectation</p>
                </a>

            </ul>
          </li>

          <li class="nav-header">EXTRAS</li>
          <li class="nav-item">
            <a href="pages/calendar.html" class="nav-link">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                Calendar
                <span class="badge badge-info right">2</span>
              </p>
            </a>
          </li>

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-envelope"></i>
              <p>
                Mailbox
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/mailbox/mailbox.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Inbox</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/mailbox/compose.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Compose</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/mailbox/read-mail.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Read</p>
                </a>
              </li>
            </ul>
          </li>
        <!--  <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Pages
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/examples/invoice.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Invoice</p>
                </a>
              </li>-->
              <!--<li class="nav-item">
                <a href="pages/examples/profile.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Profile</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/e-commerce.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>E-commerce</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/projects.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Projects</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/project-add.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Project Add</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/project-edit.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Project Edit</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/project-detail.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Project Detail</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/contacts.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Contacts</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-plus-square"></i>
              <p>
                Extras
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pages/examples/login.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Login</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/register.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Register</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/forgot-password.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Forgot Password</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/recover-password.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Recover Password</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/lockscreen.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Lockscreen</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/legacy-user-menu.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Legacy User Menu</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/language-menu.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Language Menu</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/404.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Error 404</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/500.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Error 500</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/pace.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pace</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="pages/examples/blank.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Blank Page</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="starter.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Starter Page</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-header">MISCELLANEOUS</li>
          <li class="nav-item">
            <a href="https://adminlte.io/docs/3.0" class="nav-link">
              <i class="nav-icon fas fa-file"></i>
              <p>Documentation</p>
            </a>
          </li>
          <li class="nav-header">MULTI LEVEL EXAMPLE</li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fas fa-circle nav-icon"></i>
              <p>Level 1</p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-circle"></i>
              <p>
                Level 1
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Level 2</p>
                </a>
              </li>
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>
                    Level 2
                    <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Level 3</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Level 3</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      <i class="far fa-dot-circle nav-icon"></i>
                      <p>Level 3</p>
                    </a>
                  </li>
                </ul>
              </li>
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Level 2</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="fas fa-circle nav-icon"></i>
              <p>Level 1</p>
            </a>
          </li>
          <li class="nav-header">LABELS</li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle text-danger"></i>
              <p class="text">Important</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle text-warning"></i>
              <p>Warning</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon far fa-circle text-info"></i>
              <p>Informational</p>
            </a>
          </li>
        </ul>-->
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
            <h1 class="m-0 text-dark">liste equipement</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        
      <!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>decharche interne</title>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<style>
body {
  color: #1a1f29;
  background: #ebeef2;
  font-family: 'Varela Round', sans-serif;
  font-size: 13px;
}
.table-responsive {
    margin: 30px 0;
}
.table-wrapper {
  background: #fff;
  padding: 20px 25px;
  border-radius: 3px;
  min-width: 1000px;
  box-shadow: 0 1px 1px rgba(0,0,0,.05);
}
.table-title {        
  padding-bottom: 15px;
  background: #384358;
  color: #fff;
  padding: 16px 30px;
  min-width: 100%;
  margin: -20px -25px 10px;
  border-radius: 3px 3px 0 0;
}
.table-title h2 {
  margin: 5px 0 0;
  font-size: 24px;
}
.table-title .btn-group {
  float: right;
}
.table-title .btn {
  color: #ebeef2;
  float: right;
  font-size: 13px;
  border: none;
  min-width: 50px;
  border-radius: 2px;
  border: none;
  outline: none !important;
  margin-left: 10px;
}
.table-title .btn i {
  float: left;
  font-size: 21px;
  margin-right: 5px;
}
.table-title .btn span {
  float: left;
  margin-top: 2px;
}
table.table tr th, table.table tr td {
  border-color: #ebeef2;
  padding: 12px 15px;
  vertical-align: middle;
}
table.table tr th:first-child {
  width: 60px;
}
table.table tr th:last-child {
  width: 100px;
}
table.table-striped tbody tr:nth-of-type(odd) {
  background-color: #ebeef2;
}
table.table-striped.table-hover tbody tr:hover {
  background: #ebeef2;
}
table.table th i {
  font-size: 13px;
  margin: 0 5px;
  cursor: pointer;
} 
table.table td:last-child i {
  opacity: 0.9;
  font-size: 22px;
  margin: 0 5px;
}
table.table td a {
  font-weight: bold;
  color: #ebeef2;
  display: inline-block;
  text-decoration: none;
  outline: none !important;
}
table.table td a:hover {
  color: #ebeef2;
}
table.table td a.edit {
  color: #FFC107;
}
table.table td a.delete {
  color: #F44336;
}
table.table td i {
  font-size: 19px;
}
table.table .avatar {
  border-radius: 50%;
  vertical-align: middle;
  margin-right: 10px;
}
.pagination {
  float: right;
  margin: 0 0 5px;
}
.pagination li a {
  border: none;
  font-size: 13px;
  min-width: 30px;
  min-height: 30px;
  color: #999;
  margin: 0 2px;
  line-height: 30px;
  border-radius: 2px !important;
  text-align: center;
  padding: 0 6px;
}
.pagination li a:hover {
  color: #666;
} 
.pagination li.active a, .pagination li.active a.page-link {
  background: #03A9F4;
}
.pagination li.active a:hover {        
  background: #0397d6;
}
.pagination li.disabled i {
  color: #ccc;
}
.pagination li i {
  font-size: 16px;
  padding-top: 6px
}
.hint-text {
  float: left;
  margin-top: 10px;
  font-size: 13px;
}    
/* Custom checkbox */
.custom-checkbox {
  position: relative;
}
.custom-checkbox input[type="checkbox"] {    
  opacity: 0;
  position: absolute;
  margin: 5px 0 0 3px;
  z-index: 9;
}
.custom-checkbox label:before{
  width: 18px;
  height: 18px;
}
.custom-checkbox label:before {
  content: '';
  margin-right: 10px;
  display: inline-block;
  vertical-align: text-top;
  background: white;
  border: 1px solid #bbb;
  border-radius: 2px;
  box-sizing: border-box;
  z-index: 2;
}
.custom-checkbox input[type="checkbox"]:checked + label:after {
  content: '';
  position: absolute;
  left: 6px;
  top: 3px;
  width: 6px;
  height: 11px;
  border: solid #000;
  border-width: 0 3px 3px 0;
  transform: inherit;
  z-index: 3;
  transform: rotateZ(45deg);
}
.custom-checkbox input[type="checkbox"]:checked + label:before {
  border-color: #03A9F4;
  background: #03A9F4;
}
.custom-checkbox input[type="checkbox"]:checked + label:after {
  border-color: #fff;
}
.custom-checkbox input[type="checkbox"]:disabled + label:before {
  color: #b8b8b8;
  cursor: auto;
  box-shadow: none;
  background: #ddd;
}
/* Modal styles */
.modal .modal-dialog {
  max-width: 700 px;
}
.modal .modal-header, .modal .modal-body, .modal .modal-footer {
  padding: 50px     30px;
}
.modal .modal-content {
  border-radius: 3px;
  font-size: 14px;
}
.modal .modal-footer {
  background:#ebeef2;
  border-radius: 0 0 3px 3px;
}
.modal .modal-title {
  display: inline-block;
}
.modal .form-control {
  border-radius: 2px;
  box-shadow: none;
  border-color: #dddddd;
}
.modal textarea.form-control {
  resize: vertical;
}
.modal .btn {
  border-radius: 2px;
  min-width: 100px;
} 
.modal form label {
  font-weight: normal;
} 
table{
border-collapse: collapse;
}
th, td{
boder: 1px solide black;
padding:10px;
}

      .vertical-line{
        border-left: 2px solid #000;
        display: inline-block;
        height: 130px;
        margin: 0 20px;
      }

</style>
<script>
$(document).ready(function(){
  // Activate tooltip
  $('[data-toggle="tooltip"]').tooltip();
  
  // Select/Deselect checkboxes
  var checkbox = $('table tbody input[type="checkbox"]');
  $("#selectAll").click(function(){
    if(this.checked){
      checkbox.each(function(){
        this.checked = true;                        
      });
    } else{
      checkbox.each(function(){
        this.checked = false;                        
      });
    } 
  });
  checkbox.click(function(){
    if(!this.checked){
      $("#selectAll").prop("checked", false);
    }
  });
});
</script>
</head>
<body>
<br><br><br>
<div class="container-xl">
  <div class="table-responsive">
    <div class="table-wrapper">
      
      <form>
      <br><br><br>
        <div class="modal-header">            
            <table width="100%" border="1" cellspacing="1" cellpadding="5">
                  <tr>
                    <td rowspan="3" align="center">
                      <img src="bg.png">
                      <br align="center">
                      <i align="center">BRANCHE</i>
                      <BR>
                      <i align="center">COMMERCIALISATION<i>
                    </td>
                    <td rowspan="3" align="center"><b>DECHARGE<br align="center">EQUIPEMENT INFORMATIQUE</b></td>
                    <td align="center">FE FROM SIF 05 V1</td>
                    <tr>
                      <td align="center">DATE D'APPLICATION:
                      <br>
                      14/06/2019
                      <!-- <input type="date" placeholder="date de naissance" required> -->
                    
                      </td>
                    </tr>
                    <tr>
                      <td align="center">PAGE 1 SUR 1</td>
                    </tr>
                      
                  </tr>
                  </table>
                              
        </div>
        <div class="modal-body">
        
<!-- <br><br><h6   align="center" ><b><u>Décharge</u></b></h6> -->
<br><br>        

          <tr class="form">
                <table>
                  <tr class="form">
                 <td height="20">
                <label>N°Décharge:</label>
                </td>
                <td>
                <INPUT TYPE="text" NAME="Num_serie" SIZE="100" MAXLENGTH="25" id="nom-utili" class="form-control" required /> 
                 </td>
                </tr>
                <tr class="form">
                 <td height="20">
                <label>Je soussigné :</label>
                </td>
                <td>
                <INPUT TYPE="text" NAME="Num_serie" SIZE="100" MAXLENGTH="25" id="nom-utili" class="form-control" required /> 
                 </td>
                </tr>
                <tr class="form">
                 <td height="20">
                <label>Fonction:</label>
                </td>
                <td>
                <INPUT TYPE="text" NAME="Num_serie" SIZE="100" MAXLENGTH="25" id="nom-utili" class="form-control" required /> 
                 </td>
                </tr>
                <tr class="form">
                 <td height="20">
                <label>Structure :</label>
                </td>
                <td>
                <INPUT TYPE="email" NAME="Num_serie" SIZE="100" MAXLENGTH="25" id="nom-utili" class="form-control" required /> 
                 </td>
                </tr>
              
                <tr class="form">
                 <td height="20">
                <label>Date-Décharge:</label>
                </td>
                <td>
                <INPUT TYPE="date" NAME="Num_serie" SIZE="100" MAXLENGTH="25" id="nom-utili" class="form-control" required /> 
                <!-- <input type="date" placeholder="date de naissance" class="form-control" required>  -->
                 </td>
                </tr>
                <tr class="form">
                 <td height="20">
                <label>Reconnais avoir :</label>
                </td>
                </tr>
                </table>
<INPUT TYPE="checkbox" NAME="hard" id="nom-utili" />&nbsp&nbsp<label>reçu à titre d'affection</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<INPUT TYPE="checkbox" NAME="hard" id="nom-utili" />&nbsp&nbsp<label>remis pour réparation</label>
<br>
<INPUT TYPE="checkbox" NAME="hard" id="nom-utili" />&nbsp&nbsp<label>restitué</label>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
<INPUT TYPE="checkbox" NAME="hard" id="nom-utili" />&nbsp&nbsp<label>reçu suite à une réparation </label>
<br>
<INPUT TYPE="checkbox" NAME="hard" id="nom-utili"  />&nbsp&nbsp<label>reçu à titre de prete du :...........au.............</label>
                  <br>
                  <INPUT TYPE="checkbox" NAME="hard" id="nom-utili"  />&nbsp&nbsp<label>en stock</label>
                  <br>
                  <br>
                  <p>(du/au)<b> Direction Informatique</b> les article suivants :</p>
                  <table width="100%" border="1" cellspacing="1" cellpadding="5">
                  <tr>
                  <td><b>Désignation</b></td>
                  <td><b>Qté/b</b></td>
                  <td><b>N° de serie</b></td>
                  <td><b>N° d'inventaire</b></td>
                  </tr>
                  <tr>
                  <td>IMPRIMANTE A TICKETS CANTINE</td>
                  <td>01</td>
                  <td>34006</td>
                  <td>I4062-09I0-20-0005</td>
                  </tr>
                  <!-- <tr> -->
                  <!-- <td></td> -->
                  <!-- <td></td> -->
                  <!-- <td></td> -->
                  <!-- <td></td> -->
                  <!-- </tr> -->
                  </table><br>
              
              
<h6><b>P/ La Direction Informatique:</b></h6><br><br><br><br>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<h6><b>Bénificiaire:</b></h6>
  
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    
        </div>
        
          
        <div class="modal-footer">
          <input type="submit" class="btn btn-success" value="Envoyer">
          <a href="index.html" class="btn btn-danger" ><i class="material-icons"></i> <span>Annuler</span></a>
        </div>
      </form>
    </div>
  </div>
</div>
</body>
</html>


    <!-- Section: Block Content -->

  </div>
</section>
    <!-- /.content -->
    <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io"></a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.5
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
</body>
</html>
