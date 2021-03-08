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
    <section class="content">
        <div class="row">
            <div class="col-sm-3">

            </div>
            <div class="col-sm-6">
        <form role="form" method="post" action="cathandler.php">
            <h1>Categories</h1>
              <div class="box-body">
                <div class="form-group">
                  <label for="categories">Categories</label>
                  <input type="text" class="form-control" id="categories" placeholder="Enter Categories" name="cate">
                </div>

               
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
</div>
<div class="col-sm-3">
</div>
</section>

    <!-- Main content -->
    
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 <?php
 include("adminpartial/footer.php");
 ?>
</body>
</html>
