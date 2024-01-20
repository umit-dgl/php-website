<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Admin Panel</title>

    <div id="sidebar-wrapper">
      <h5 class="logo-text"></h5>
      <div class="brand-logo">
        <img class="logo-icon"/>
      </div>
      <ul class="sidebar-menu do-nicescrol">
        <li class="sidebar-header"> </li>
        <li>
          <a href="<?=base_url('kayit_ekle')?>">
            <i class="zmdi zmdi-assignment-returned"></i> <span>Kayıt Ekle</span>
          </a>
        </li>
        <li>
          <a href="<?=base_url('kayit_listele')?>">
            <i class="zmdi zmdi-format-list-bulleted"></i> <span>Kayıt Listele</span>
          </a>
        </li>
      </ul>
    </div>

    <!-- loader-->
    <link href="<?=base_url()?>assets/css/pace.min.css" rel="stylesheet" />
    <script src="<?=base_url()?>assets/js/pace.min.js"></script>
    <!--favicon-->
    <link rel="icon" href="<?=base_url()?>assets/images/favicon.ico" type="image/x-icon" />
    <!-- simplebar CSS-->
    <link href="<?=base_url()?>assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
    <!-- Bootstrap core CSS-->
    <link href="<?=base_url()?>assets/css/bootstrap.min.css" rel="stylesheet" />
    <!-- animate CSS-->
    <link href="<?=base_url()?>assets/css/animate.css" rel="stylesheet" type="text/css" />
    <!-- Icons CSS-->
    <link href="<?=base_url()?>assets/css/icons.css" rel="stylesheet" type="text/css" />
    <!-- Sidebar CSS-->
    <link href="<?=base_url()?>assets/css/sidebar-menu.css" rel="stylesheet" />
    <!-- Custom Style-->
    <link href="<?=base_url()?>assets/css/app-style.css" rel="stylesheet" />
  </head>