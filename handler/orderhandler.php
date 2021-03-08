<?php
session_start();
include("../partial/connect.php");
$c_id=$_SESSION['c_id'];
//goto c_login.php
$total=$_POST['total'];
$address=$_POST['address'];
$phone=$_POST['phone'];
$sql="INSERT INTO `orders`(`customer_id`, `address`, `total`, `phone`) VALUES ('$c_id','$address','$total','$phone')";
$connect->query($sql);


$sql2="SELECT id from orders  order by id DESC limit 1";
$result=$connect->query($sql2);
$final=$result->fetch_assoc();


$orderid=$final['id'];
foreach ($_SESSION['cart'] as $key => $value) {
    $proid=$value['item_id'];
    $quantity=$value['quantity'];
    $sql3="INSERT INTO order_details( `order_id`, `product_id`, `quantity`) values('$orderid','$proid',$quantity)";
    $connect->query($sql3);
}
echo "<script> 
        alert('Order is placed😃😃😃');
        window.location.href='../index.php';
        </script>;"
?>