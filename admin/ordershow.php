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
                $sql="SELECT * FROM orders where id='$id' ";
                $result=$connect->query($sql);
                $final=$result->fetch_assoc();
                ?>
              <h3>CustomerId:  <?php echo $final['customer_id']?> </h3><hr><br>
              <h3>Total:  <?php echo $final['total']?> </h3><hr><br>
              <h3>Address:  <?php echo $final['address']?> </h3><hr><br>
          
            </div>
           
            <div class="col-sm-9">
            <?php
                include("../partial/connect.php");
                $id=$_GET['pro_id'];
                $sql="SELECT * FROM order_details where id='$id' ";
                $result=$connect->query($sql);
                $final=$result->fetch_assoc();
                ?>
                <h3> ProductId:  <?php echo $final['product_id']?> </h3><hr><br>
                <h3> Quantity:  <?php echo $final['quantity']?> </h3><hr><br>
                
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