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
            <div class="col-sm-9">
            <?php
                include("../partial/connect.php");
                $id=$_GET['pro_id'];
                $sql="SELECT * FROM products where id='$id' ";
                $result=$connect->query($sql);
                $final=$result->fetch_assoc();
                ?>
              <h3>Name:  <?php echo $final['name']?> </h3><hr><br>
              <h3>Price:  <?php echo $final['price']?> </h3><hr><br>
              <h3>Description:  <?php echo $final['description']?> </h3><hr><br>
          
              <img src="../<?php echo $final['picture']?>" style="width:300px;height:300px;" alt="NO FILE">
            </div>
      
<div class="col-sm-3">
</div>
</section>
  </div>
  </div>
 <?php
 include("adminpartial/footer.php");
 ?>
</body>
</html>