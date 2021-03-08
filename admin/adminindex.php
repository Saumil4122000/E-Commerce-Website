<!DOCTYPE html>
<html>
<?php
include("adminpartial/session.php");
include("adminpartial/head.php");
?> 
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php
  include("adminpartial/header.php");
  ?>
  <!-- Left side column. contains the logo and sidebar -->
  <?php
  include("adminpartial/aside.php");
  ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="col-sm-8">
      <a href="product.php">
      <button type="button" class="btn-success btn-lg btn-primary">Add product</button>

            </a>
            <hr>
            </div>
            <div class="col-sm-8">
      <a href="categories.php">
      <button type="button" class="btn-success btn-lg btn-primary">Add Category</button>
            </a>
            <hr>
            </div>
      </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 <?php
 include("adminpartial/footer.php");
 ?>
</body>
</html>
