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
        <form role="form" method="POST" action="producthandler.php" enctype="multipart/form-data">
            <h1>Product</h1>
              <div class="box-body">
                <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" class="form-control" id="name" placeholder="Enter product Name" name="name1">
                </div>
                <div class="form-group">
                  <label for="price">Price</label>
                  <input type="text" class="form-control" id="price" placeholder="Price" name="price1">
                </div>
                <div class="form-group">
                  <label for="picture">File input</label>
                  <input type="file" id="picture" name="file1">
                </div>
                <div class="form-group">
                  <label for="descrition">Descrition</label>
                  <textarea type="label" class="form-control" id="description"rows="10" placeholder="Enter description" name="description1">
                    </textarea>
                </div>
                <div class="form-group">
                  <label for="category">Categories</label>
                  <select id="category" name="category1">
                    <?php
                      include("../partial/connect.php");
                      $cat="SELECT * FROM categories";
                      $result=mysqli_query($connect,$cat);
                      while($row=mysqli_fetch_assoc($result))
                      {
                        echo "<option value=".$row['id'].">".$row['name']."</option>";
                      }
                     ?>
                    </select>
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
